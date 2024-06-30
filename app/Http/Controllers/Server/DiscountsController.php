<?php

namespace App\Http\Controllers\Server;

use App\Models\Discounts;
use Illuminate\Http\Request;
use App\Models\TypeDiscounts;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiscountsRequest;

class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDiscounts = Discounts::all()->where('is_deleted', 1);

        $type_discounts = TypeDiscounts::all();

        return view('server.discounts.index', compact('listDiscounts', 'type_discounts'));
    }

    public function trash()
    {
        $listDiscounts = Discounts::all()->where('is_deleted', 0);

        $type_discounts = TypeDiscounts::all();

        return view('server.discounts.trash', compact('listDiscounts', 'type_discounts'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listDiscounts = Discounts::where('name', 'like', "%$keyword%")->where('is_deleted', 1)->get();

        return view('server.discounts.search', compact('listDiscounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts = Discounts::all();
        $type_discounts = TypeDiscounts::all();

        return view('server.discounts.create', compact('discounts', 'type_discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiscountsRequest $req)
    {
        $discounts = new Discounts();

        $discounts->name = $req->name;
        $discounts->amount = $req->amount;

        $discounts->start_date = $req->start_date;
        $discounts->end_date = $req->end_date;

        $discounts->type_discounts_id = $req->type_discounts_id;
        $discounts->is_deleted = 1;

        $discounts->save();

        return redirect()->route('discounts.index')->with('alert', 'Thêm mã giảm giá thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discounts $discounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $discounts = Discounts::find($id);
        $type_discounts = TypeDiscounts::all();

        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Đã hết áp dụng'],
            (object) ['id' => 1, 'name' => 'Đang áp dụng']
        ];

        return view('server.discounts.update', compact('discounts', 'type_discounts', 'is_deleted'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req,  $id)
    {
        $discounts = Discounts::find($id);

        if (empty($discounts)) {
            return redirect()->route('discounts.index')->with('alert', 'Mã giảm giá không tồn tại!!');
        }

        $discounts->name = $req->name;
        $discounts->amount = $req->amount;

        $discounts->start_date = $req->start_date;
        $discounts->end_date = $req->end_date;

        $discounts->type_discounts_id = $req->type_discounts_id;
        $discounts->is_deleted = $req->is_deleted;

        $discounts->save();

        return redirect()->route('discounts.index')->with('alert', 'Cập nhật mã giảm giá thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $discounts = Discounts::find($id);

        if (!$discounts) {
            return redirect()->route('discounts.index')->with('alert', "Mã giảm giá không tồn tại!!");
        }

        if ($discounts->is_deleted == 0) {
            return redirect()->route('discounts.index')->with('alert', 'Mã giảm giá đã được xóa trước đó rồi!!');
        }

        $discounts->is_deleted = 0;
        $discounts->save();

        return redirect()->route('discounts.index')->with('alert', 'Xóa mã giảm giá thành công');
    }
}
