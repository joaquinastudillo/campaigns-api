<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignProduct extends Model
{
    protected $table = 'campaign_product';
    protected $fillable = ['campaign_id', 'product_id', 'description'];
    public $timestamps = false;

    public function campaign(){
        return $this->hasOne('App\Campaign');
    }

    public function product(){
        return $this->hasOne('App\Product');
    }

}
