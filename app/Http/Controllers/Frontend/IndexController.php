<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function productDetails($id)
    {
        $product = Product::findorfail($id);

        return view('frontendTheme.product.product_details', compact('product'));
    }
}