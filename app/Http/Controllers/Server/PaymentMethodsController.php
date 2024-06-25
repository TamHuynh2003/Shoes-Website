<?php

namespace App\Http\Controllers\Server;

use Illuminate\Http\Request;
use App\Models\PaymentMethods;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentMethodsRequest;

class PaymentMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPayments = PaymentMethods::all()->where('is_deleted', 1);

        return view('server.payment_methods.index', compact('listPayments'));
    }

    public function trash()
    {
        $listPayments = PaymentMethods::all()->where('is_deleted', 0);

        return view('server.payment_methods.trash', compact('listPayments'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listPayments = PaymentMethods::where('name', 'like', "%$keyword%")->where('is_deleted', 1)->get();

        return view('server.payment_methods.search', compact('listPayments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments = PaymentMethods::all();

        return view('server.payment_methods.create', compact('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentMethodsRequest $req)
    {
        $payments = new PaymentMethods();

        $payments->name = $req->name;
        $payments->is_deleted = 1;

        $payments->save();

        return redirect()->route('payment_methods.index')->with('alert', 'Thêm phương thức thanh toán thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentMethods $paymentMethods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $payments = PaymentMethods::find($id);

        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Đã hết áp dụng'],
            (object) ['id' => 1, 'name' => 'Đang áp dụng']
        ];

        return view('server.payment_methods.update', compact('payments', 'is_deleted'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $payments = PaymentMethods::find($id);

        if (empty($payments)) {
            return redirect()->route('payment_methods.index')->with('alert', 'Phương thức thanh toán không tồn tại!!');
        }

        $payments->name = $req->name;
        $payments->is_deleted = $req->is_deleted;

        $payments->save();

        return redirect()->route('payment_methods.index')->with('alert', 'Cập nhật phương thức thanh toán thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $payments = PaymentMethods::find($id);

        if (!$payments) {
            return redirect()->route('payment_methods.index')->with('alert', 'Phương thức thanh toán không tồn tại!!');
        }

        if ($payments->is_deleted == 0) {
            return redirect()->route('payment_methods.index')->with('alert', 'Phương thức thanh toán đã được xóa trước đó rồi!!');
        }

        $payments->is_deleted = 0;
        $payments->save();

        return redirect()->route('payment_methods.index')->with('alert', 'Xóa phương thức thanh toán thành công');
    }
}
