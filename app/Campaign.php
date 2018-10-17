<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = ['name', 'description', 'status', 'status'];
    public $timestamps = false; 

    public function stores(){
        return $this->belongsToMany('App\Store');
    }

    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
