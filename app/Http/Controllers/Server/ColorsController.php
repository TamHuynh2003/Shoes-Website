<?php

namespace App\Http\Controllers\Server;

use App\Models\Colors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreColorsRequest;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listColors = Colors::all()->where('is_deleted', 1);

        return view('server.colors.index', compact('listColors'));
    }

    public function trash()
    {
        $listColors = Colors::all()->where('is_deleted', 0);

        return view('server.colors.trash', compact('listColors'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listColors = Colors::where('name', 'like', "%$keyword%")->where('is_deleted', 1)->get();

        return view('server.colors.search', compact('listColors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Colors::all();

        return view('server.colors.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColorsRequest $req)
    {
        $colors = new Colors();

        $colors->name = $req->name;
        $colors->is_deleted = 1;

        $colors->save();

        return redirect()->route('colors.index')->with('alert', 'Thêm màu sắc thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colors $colors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $colors = Colors::find($id);

        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Đã hết'],
            (object) ['id' => 1, 'name' => 'Đang còn']
        ];

        return view('server.colors.update', compact('colors', 'is_deleted'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $colors = Colors::find($id);

        if (empty($colors)) {
            return redirect()->route('colors.index')->with('alert', 'Màu sắc không tồn tại!!');
        }

        $colors->name = $req->name;
        $colors->is_deleted = $req->is_deleted;

        $colors->save();

        return redirect()->route('colors.index')->with('alert', 'Cập nhật màu sắc thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $colors = Colors::find($id);

        if (!$colors) {
            return redirect()->route('colors.index')->with('alert', 'Màu sắc không tồn tại!!');
        }

        if ($colors->is_deleted == 0) {
            return redirect()->route('colors.index')->with('alert', 'Màu sắc đã được xóa trước đó rồi!!');
        }

        $colors->is_deleted = 0;
        $colors->save();

        return redirect()->route('colors.index')->with('alert', 'Xóa màu sắc thành công');
    }
}
