<?php

namespace App\Http\Controllers\Server;

use App\Models\Purchases;
use App\Models\PurchaseDetails;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Colors;
use App\Models\ProductDetails;
use App\Models\Products;
use App\Models\Providers;
use App\Models\Sizes;
use Illuminate\Support\Facades\Auth;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $listPurchases = Purchases::where('status_id', 1)->get();
        $listPurchases = Purchases::whereIn('status_id', [1, 2])->get();

        return view('server.purchases.index', compact('listPurchases'));
    }

    public function trash()
    {
        $listPurchases = Purchases::where('status_id', 3)->get();

        return view('server.purchases.trash', compact('listPurchases'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        if (empty($keyword)) {
            $listPurchases = Purchases::where('is_deleted', 1)->get();
        } else {
            $providersIds = Providers::where('name', 'like', "%$keyword%")
                ->pluck('id')
                ->toArray();

            if (!empty($providersIds)) {
                $listPurchases = Purchases::whereIn('providers_id', $providersIds)
                    ->where('is_deleted', 1)
                    ->get();
            } else {
                $listPurchases = [];
            }
        }

        return view('server.purchases.search', compact('listPurchases'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listProviders = Providers::all();
        $listProducts = Products::all();

        $listColors = Colors::all();
        $listSizes = Sizes::all();

        return view('server.purchases.create', compact('listProviders', 'listProducts', 'listColors', 'listSizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $req)
    // {
    //     $i = 0;
    //     $total = 0;

    //     foreach ($req->totalprice as $totalprice) {
    //         $total += $totalprice;
    //     }

    //     $purchases = new Purchases();

    //     $purchases->total_price = $total;
    //     $purchases->purchase_date = $req->purchase_date;

    //     $purchases->providers_id = $req->provider_id;
    //     $purchases->admins_id = Auth::user()->id;

    //     $purchases->is_deleted = 0;
    //     $purchases->save();

    //     foreach ($req->product_id as $purchase) {

    //         $purchasesDetail = new PurchaseDetails();

    //         $purchasesDetail->quantity = $req->quantity[$i];
    //         $purchasesDetail->purchase_price = $req->purchase_price[$i];

    //         $purchasesDetail->colors_id = $req->color[$i];
    //         $purchasesDetail->sizes_id = $req->size[$i];

    //         $purchasesDetail->purchases_id = $purchases->id;
    //         $purchasesDetail->products_id = $req->product_id[$i];

    //         $purchasesDetail->save();
    //         $i++;
    //     }

    //     return redirect()->route('purchases.index')->with('alert', 'Tạo hóa đơn nhập thành công');
    // }
    public function store(Request $req)
    {
        $i = 0;
        $total = 0;

        foreach ($req->totalprice as $totalprice) {
            $total += $totalprice;
        }

        $purchases = new Purchases();
        $purchases->total_price = $total;

        $purchases->purchase_date = $req->purchase_date;
        $purchases->providers_id = $req->provider_id;

        $purchases->admins_id = Auth::user()->id;
        $purchases->status_id = 1;

        $purchases->save();

        foreach ($req->product_id as $purchase) {
            $purchasesDetail = new PurchaseDetails();

            $purchasesDetail->quantity = $req->quantity[$i];
            $purchasesDetail->purchase_price = $req->purchase_price[$i];

            $purchasesDetail->colors_id = $req->color[$i];
            $purchasesDetail->sizes_id = $req->size[$i];

            $purchasesDetail->purchases_id = $purchases->id;
            $purchasesDetail->products_id = $req->product_id[$i];

            $purchasesDetail->save();
            $i++;
        }

        return redirect()->route('purchases.index')->with('alert', 'Tạo hóa đơn nhập thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $listPurchaseDetails = PurchaseDetails::where('purchases_id', $id)->get();

        return view('server.purchases.details', compact('listPurchaseDetails'));
    }

    public function verify($id)
    {
        $purchaseDetails = PurchaseDetails::where('purchases_id', $id)->get();

        foreach ($purchaseDetails as $detail) {

            $productDetails = ProductDetails::where('products_id', $detail->products_id)
                ->where('colors_id', $detail->colors_id)
                ->where('sizes_id', $detail->sizes_id)->get();

            if ($productDetails->isEmpty()) {
                $productdetail = new ProductDetails();

                $productdetail->quantity = $detail->quantity;
                $productdetail->products_id = $detail->products_id;

                $productdetail->colors_id = $detail->colors_id;
                $productdetail->sizes_id = $detail->sizes_id;

                $productdetail->save();
            } else {
                $productDetails[0]->quantity += $detail->quantity;
                $productDetails[0]->save();
            }
        }

        $purchases = Purchases::where('id', $id)->get();

        $purchases[0]->status_id = 2;
        $purchases[0]->save();

        return redirect()->route('purchases.index')->with('alert', 'Duyệt hóa đơn nhập thành công2');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchases $purchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchases $purchases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $purchases = Purchases::find($id);

        $purchases[0]->status_id = 3;
        $purchases[0]->save();

        return redirect()->route('purchases.index')->with('alert', 'Xóa hóa đơn nhập thành công');
    }
}
