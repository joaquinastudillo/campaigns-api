<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = ['name', 'description', 'status', 'user_id'];
    public $timestamps = false; 

    public function stores(){
        return $this->belongsToMany('App\Store');
    }

    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
