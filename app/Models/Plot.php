<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable = [
        'site_id','user_id','block','plot_number','sold','capacity'
    ];

    public function site(){
        return $this->belongsTo('App\Models\Site');
    }
}
