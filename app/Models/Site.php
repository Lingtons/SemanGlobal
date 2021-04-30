<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $fillable = [
      'name','type','location','address','capacity','plots','cover_picture','aerial_picture','alt_picture'
    ];

    public function plots(){
        return $this->hasMany('App\Models\Plot');
    }
}
