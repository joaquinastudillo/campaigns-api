<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Http\Resources\Product as ProductResource;

class CampaignProductController extends Controller
{
    public function index($campaignId, $productId = null){
        $products = Campaign::find($campaignId)->products()->get();
        return ProductResource::collection($products);
    }

    public function show($campaignId, $productId){
        $products = Campaign::find($campaignId)->products()->where('product_id', $productId)->get();
        return new ProductResource($products);
    }
}
