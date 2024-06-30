<?php

namespace App\Http\Controllers\Client;

use App\Models\Products;
use App\Models\SlideShows;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $listSlides = SlideShows::where('is_deleted', 1)->get();

        $listProducts = Products::with('images')->get();

        return view('client.home.index', compact('listSlides', 'listProducts'));
    }
}
