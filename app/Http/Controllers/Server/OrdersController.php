<?php

namespace App\Http\Controllers\Server;

use App\Models\Users;
use App\Models\Orders;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $listOrders = Orders::all()->where('order_states_id', 1, 2, 4, 5);
        $listOrders = Orders::whereIn('status_id', [1, 2, 4, 5])->get();

        return view('server.orders.index', compact('listOrders'));
    }

    public function trash()
    {
        $listOrders = Orders::all()->where('status_id', 3);

        return view('server.orders.trash', compact('listOrders'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        if (empty($keyword)) {
            $listOrders = Orders::all();
        } else {
            $userId = Users::where('fullname', 'like', "%$keyword%")->pluck('id')->toArray();

            if (!empty($userId)) {
                $listOrders = Orders::whereIn('users_id', $userId)->get();
            } else {
                $listOrders = [];
            }
        }

        return view('server.orders.search', compact('listOrders'));
    }

    public function verify($id)
    {
        $orders = Orders::where('id', $id)->get();

        $orders[0]->status_id = 2;
        $orders[0]->save();

        return redirect()->route('server.orders.index')->with('alert', 'Duyệt đơn hàng thành công');
    }

    public function changeStatus($id, $status)
    {
        $orders = Orders::where('id', $id)->get();

        $orders[0]->status_id = $status;
        $orders[0]->save();

        return redirect()->route('server.orders.index')->with('alert', 'Cập nhập status đơn hàng thành công');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $listOrderDetails = OrderDetails::where('orders_id', $id)->get();

        return view('server.orders.details', compact('listOrderDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $orderDetails = OrderDetails::where('orders_id', $id)->get();

        foreach ($orderDetails as $detail) {

            $productDetails = ProductDetails::where('products_id', $detail->products_id)
                ->where('colors_id', $detail->colors_id)
                ->where('sizes_id', $detail->sizes_id)
                ->get();

            if ($productDetails->isEmpty()) {
                return redirect()->route('server.orders.index')->with('alert', 'Hóa đơn không có sản phẩm nào!');
            } else {
                $productDetails[0]->quantity += $detail->quantity;
                $productDetails[0]->save();
            }
        }
        $orders = Orders::where('id', $id)->get();

        $orders[0]->status_id = 3;
        $orders[0]->save();

        return redirect()->route('orders.index')->with('alert', 'Xóa đơn hàng thành công');
    }
}
