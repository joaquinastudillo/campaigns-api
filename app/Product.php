<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'brand', 'description'];
    public $timestamps = false;

    public function campaigns(){
        return $this->belongsToMany('App\Campaign');
    }

}
