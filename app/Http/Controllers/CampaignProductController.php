<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\CampaignProduct;
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

    public function store(Request $request){
        $newRelationship = CampaignProduct::create($request->all());
        return new ProductResource($newRelationship);
    }

    public function destroy($id){
        $relationship = CampaignProduct::find($id);
        if($relationship->delete()) {
            return new ProductResource($relationship);
        }
    }
}

