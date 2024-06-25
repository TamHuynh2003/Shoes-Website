<?php

namespace App\Http\Controllers\Server;

use App\Models\Sizes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSizesRequest;

class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listSizes = Sizes::all()->where('is_deleted', 1);

        return view('server.sizes.index', compact('listSizes'));
    }

    public function trash()
    {
        $listSizes = Sizes::all()->where('is_deleted', 0);

        return view('server.sizes.trash', compact('listSizes'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listSizes = Sizes::where('name', 'like', "%$keyword%")->where('is_deleted', 1)->get();

        return view('server.sizes.search', compact('listSizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sizes = Sizes::all();

        return view('server.sizes.create', compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizesRequest $req)
    {
        $sizes = new Sizes();

        $sizes->name = $req->name;
        $sizes->is_deleted = 1;

        $sizes->save();

        return redirect()->route('sizes.index')->with('alert', 'Thêm kích cỡ thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sizes $sizes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sizes = Sizes::find($id);

        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Đã hết'],
            (object) ['id' => 1, 'name' => 'Đang còn']
        ];

        return view('server.sizes.update', compact('sizes', 'is_deleted'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req,  $id)
    {
        $sizes = Sizes::find($id);

        if (empty($sizes)) {
            return redirect()->route('sizes.index')->with('alert', 'Kích cỡ không tồn tại!!');
        }

        $sizes->name = $req->name;
        $sizes->is_deleted = $req->is_deleted;

        $sizes->save();

        return redirect()->route('sizes.index')->with('alert', 'Cập nhật kích cỡ thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sizes = Sizes::find($id);

        if (!$sizes) {
            return redirect()->route('sizes.index')->with('alert', 'Kích cỡ không tồn tại!!');
        }

        if ($sizes->is_deleted == 0) {
            return redirect()->route('sizes.index')->with('alert', 'Kích cỡ đã được xóa trước đó rồi!!');
        }

        $sizes->is_deleted = 0;
        $sizes->save();

        return redirect()->route('sizes.index')->with('alert', 'Xóa kích cỡ thành công');
    }
}
