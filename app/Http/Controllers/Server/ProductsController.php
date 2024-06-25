<?php

namespace App\Http\Controllers\Server;

use App\Models\Sizes;
use App\Models\Colors;
use App\Models\Products;
use App\Models\Providers;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\ProductDetails;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProducts = Products::all()->where('is_deleted', 1);

        $listColor = Colors::all();
        $listSize = Sizes::all();

        $listCategories = Categories::all();
        $productImage = ProductImages::all();

        return view('server.products.index', compact('listProducts', 'listColor', 'listSize', 'listCategories', 'productImage',));
    }

    public function trash()
    {
        $listProducts = Products::all()->where('is_deleted', 0);

        $listColors = Colors::all();
        $listSizes = Sizes::all();

        $listCategories = Categories::all();
        $productImage = ProductImages::all();

        return view('server.products.trash', compact('listProducts', 'listColors', 'listSizes', 'listCategories', 'productImage',));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $productImage = ProductImages::all();
        $listProducts = Products::where('name', 'like', "%$keyword%")->get();

        return view('server.products.search', compact('productImage', 'listProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $products = Products::all();

    //     $listColors = Colors::all();
    //     $listSizes = Sizes::all();

    //     $listCategories = Categories::all();
    //     $listProviders = Providers::all();

    //     $productImage = ProductImages::all();

    //     return view('server.products.create', compact('products', 'listColors', 'listSizes', 'listCategories', 'listProviders', 'productImage'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */

    // public function store(StoreProductsRequest $req)
    // {
    //     $products = new Products();

    //     $products->name = $req->name;
    //     $products->descriptions = $req->descriptions;

    //     $products->purchase_price = $req->purchase_price;
    //     $products->selling_price = $req->selling_price;

    //     $products->categories_id = $req->categories_id;
    //     $products->providers_id = $req->providers_id;

    //     $products->is_deleted = 1;
    //     $products->save();

    //     if ($req->hasFile('images')) {

    //         $file = $req->file('images');
    //         $extension = $file->getClientOriginalExtension();

    //         $filename = time() . '_' . uniqid() . '.' . $extension;
    //         $file->move('images/products/', $filename);

    //         $productImage = new ProductImages();
    //         $productImage->products_id = $products->id;

    //         $productImage->url = $filename;
    //         $productImage->save();
    //         // }
    //     }

    //     $productDetail = new ProductDetails();

    //     $productDetail->quantity = 10;

    //     $productDetail->products_id = $products->id;
    //     $productDetail->colors_id = $req->colors_id;

    //     $productDetail->sizes_id = $req->sizes_id;
    //     $productDetail->save();

    //     return redirect()->route('products.index')->with('alert', 'Thêm sản phẩm thành công');
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Products::find($id);
        $productDetails = ProductDetails::find($id);

        $listColor = ProductDetails::where('products_id', $id)->distinct()->get('colors_id');
        $listSize = ProductDetails::where('products_id', $id)->distinct()->get('sizes_id');

        return view('server.products.details', compact('products', 'listColor', 'listSize', 'productDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $products = Products::find($id);

    //     $is_deleted = [
    //         (object) ['id' => 0, 'name' => 'Hết hàng'],
    //         (object) ['id' => 1, 'name' => 'Còn hàng']
    //     ];

    //     return view('server.products.update', compact('products', 'is_deleted'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $req,  $id)
    // {
    //     $products = Products::find($id);

    //     $products->name = $req->name;
    //     $products->description = $req->description;

    //     $products->purchase_price = $req->purchase_price;
    //     $products->selling_price = $req->selling_price;

    //     $products->categories_id = $req->categories_id;
    //     $products->providers_id = $req->providers_id;

    //     $products->is_deleted = $req->is_deleted;
    //     $products->save();

    //     if ($req->hasFile('images')) {

    //         $images = $req->file('images');

    //         foreach ($images as $image) {

    //             $file = new ProductImages();

    //             $imageName = $image->getClientOriginalName();
    //             $path = $image->storeAs('images/products', $imageName, 'public');

    //             $file->url = $path;
    //             $file->products_id = $products->id;

    //             $file->save();
    //         }
    //     }

    //     $productDetail = ProductDetails::where('products_id', $products->id)->first();

    //     $productDetail->quantity = $req->quantity;

    //     $productDetail->colors_id = $req->colors_id;
    //     $productDetail->sizes_id = $req->sizes_id;

    //     $productDetail->save();

    //     return redirect()->route('products.index')->with('alert', 'Cập nhật sản phẩm thành công');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Products::find($id);

        if (!$products) {
            return redirect()->route('products.index')->with('alert', "Sản phẩm không tồn tại!!");
        }

        if ($products->is_deleted == 0) {
            return redirect()->route('products.index')->with('alert', 'Sản phẩm  đã được xóa trước đó rồi!!');
        }

        $products->is_deleted = 0;
        $products->save();

        return redirect()->route('products.index')->with('alert', 'Xóa sản phẩm thành công');
    }

    public function create()
    {
        $listColors = Colors::all();
        $listSizes = Sizes::all();
        $listCategories = Categories::all();
        $listProviders = Providers::all();

        return view('server.products.create', compact('listColors', 'listSizes', 'listCategories', 'listProviders'));
    }

    // Store a newly created resource in storage
    public function store(StoreProductsRequest $req)
    {
        $products = new Products();

        $products->name = $req->name;
        $products->descriptions = $req->descriptions;
        $products->purchase_price = $req->purchase_price;
        $products->selling_price = $req->selling_price;
        $products->categories_id = $req->categories_id;
        $products->providers_id = $req->providers_id;
        $products->is_deleted = 1; // Set default as not deleted
        $products->save();

        // Save product images
        if ($req->hasFile('images')) {
            foreach ($req->file('images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('images/products/', $filename);

                $productImage = new ProductImages();
                $productImage->products_id = $products->id;
                $productImage->url = $filename;
                $productImage->is_deleted = 1; // Set default as not deleted
                $productImage->save();
            }
        }

        // Save product details
        $productDetail = new ProductDetails();
        $productDetail->quantity = 10;
        $productDetail->products_id = $products->id;
        $productDetail->colors_id = $req->colors_id;
        $productDetail->sizes_id = $req->sizes_id;
        $productDetail->is_deleted = 1; // Set default as not deleted
        $productDetail->save();

        return redirect()->route('products.index')->with('alert', 'Thêm sản phẩm thành công');
    }

    // Display form to edit a product
    public function edit($id)
    {
        $products = Products::find($id);
        $listColors = Colors::all();
        $listSizes = Sizes::all();
        $listCategories = Categories::all();
        $listProviders = Providers::all();
        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Còn hàng'],
            (object) ['id' => 1, 'name' => 'Hết hàng']
        ];

        return view('server.products.update', compact('products', 'listColors', 'listSizes', 'listCategories', 'listProviders', 'is_deleted'));
    }

    // Update the specified resource in storage
    public function update(Request $req, $id)
    {
        $products = Products::find($id);

        $products->name = $req->name;
        $products->descriptions = $req->descriptions;
        $products->purchase_price = $req->purchase_price;
        $products->selling_price = $req->selling_price;
        $products->categories_id = $req->categories_id;
        $products->providers_id = $req->providers_id;
        $products->is_deleted = $req->is_deleted;
        $products->save();

        // Update product images
        if ($req->hasFile('images')) {
            foreach ($req->file('images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('images/products/', $filename);

                $productImage = new ProductImages();
                $productImage->products_id = $products->id;
                $productImage->url = $filename;
                $productImage->is_deleted = 1; // Set default as not deleted
                $productImage->save();
            }
        }

        // Update product details
        $productDetail = ProductDetails::where('products_id', $products->id)->first();
        if ($productDetail) {
            $productDetail->quantity = $req->quantity;
            $productDetail->colors_id = $req->colors_id;
            $productDetail->sizes_id = $req->sizes_id;
            $productDetail->is_deleted = 0; // Set default as not deleted
            $productDetail->save();
        }

        return redirect()->route('products.index')->with('alert', 'Cập nhật sản phẩm thành công');
    }
}
