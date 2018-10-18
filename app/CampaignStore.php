<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignStore extends Model
{
    protected $table = 'campaign_store';
    protected $fillable = ['campaign_id', 'store_id', 'description'];
    public $timestamps = false;

    public function campaign(){
        return $this->hasOne('App\Campaign');
    }

    public function store(){
        return $this->hasOne('App\Store');
    }

}
