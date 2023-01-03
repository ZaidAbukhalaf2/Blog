<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Items;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $items = new items;
      $items->name = $request->name;
      $items->title = $request->title;
      $items->body = $request->body;
      $items->user_id = $request->user_id;
      $items->category_id = $request->category_id;

      if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .''.$extension;
            $file->storeAs('public/web/items/',$filename);
            $items->image = $filename;
        }

        $items->save();
        Alert::success('Congrats', 'Create Items Successfully ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = items::with(['category','user'])->where('category_id','=',$id)->get();

        return view('pages.Web.items',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $items = items::findOrFail($id);

        $this->authorize($items);


        return view('pages.Web.crud-pages.edit-items',compact('items'));

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
        $items = items::findOrFail($id);
        $items->name = $request->name;
        $items->title = $request->title;
        $items->body = $request->body;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .''.$extension;
            $file->storeAs('public/items/',$filename);
            $items->image = $filename;
        }


        $items->save();

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
