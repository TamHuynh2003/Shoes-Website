<?php

namespace App\Http\Controllers\Client;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\ProductDetails;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $listProducts = Products::with('images')->get();
        return view('client.products.index', compact('listProducts'));
    }

    public function show($id)
    {
        $products = Products::find($id);
        $productDetails = ProductDetails::find($id);
        $productImage = ProductImages::all();

        return view('client.products.details', compact('products', 'productDetails', 'productImage'));
    }
}
