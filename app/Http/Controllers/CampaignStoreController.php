<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Http\Resources\Store as StoreResource;

class CampaignStoreController extends Controller
{
    public function index($campaignId){
        $stores = Campaign::find($campaignId)->stores()->get();
        return StoreResource::collection($stores);
    }

    public function show($campaignId, $storeId){
        $stores = Campaign::find($campaignId)->stores()->where('store_id', $storeId)->get();
        return new StoreResource($stores);
    }
}
