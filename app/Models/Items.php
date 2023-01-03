<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected  $fillable = ['name','image','title','body','category_id','user_id'];



    public function category(){

        return $this->belongsTo(Categories::class,'category_id');
    }
    public function user(){

        return $this->belongsTo(User::class,'user_id');
    }
}
