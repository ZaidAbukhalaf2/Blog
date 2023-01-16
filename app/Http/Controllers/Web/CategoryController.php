<?php

namespace App\Http\Controllers\Web;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('index',compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Categories;
        $categories->name = $request->name;
        $categories->title = $request->title;
        $categories->body = $request->body;
        $categories->user_id = $request->user_id;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() .''. $extension;
            $file->move('categories',$filename);
            $categories->image = $filename;
        }

        $categories->save();

        return redirect()->back();
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::findOrFail($id);

        // if(Gate::denies('update-category',$category)){
        //     abort(403 , " You can't Edit this post");
        // }
        $this->authorize($category);

        return view('pages.Web.crud-pages.edit-category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Categories::findOrFail($id);


        $categories->name = $request->name;
        $categories->title = $request->title;
        $categories->body = $request->body;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() .''. $extension;
            $file->move('categories',$filename);
            $categories->image = $filename;
        }

        $categories->save();
        return redirect()->route('category-show');

       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
