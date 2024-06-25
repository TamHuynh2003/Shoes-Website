<?php

namespace App\Http\Controllers\Server;

use App\Models\Providers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProvidersRequest;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProviders = Providers::all()->where('is_deleted', 1);

        return view('server.providers.index', compact('listProviders'));
    }

    public function trash()
    {
        $listProviders = Providers::all()->where('is_deleted', 0);

        return view('server.providers.trash', compact('listProviders'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listProviders = Providers::where('name', 'like', "%$keyword%")->where('is_deleted', 1)->get();

        return view('server.providers.search', compact('listProviders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers = Providers::all();

        return view('server.providers.create', compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvidersRequest $req)
    {
        $providers = new Providers();

        $providers->name = $req->name;
        $providers->address = $req->address;

        $providers->email = $req->email;
        $providers->phone_number = $req->phone_number;

        $providers->descriptions = $req->descriptions;
        $providers->is_deleted = 1;

        $providers->save();

        return redirect()->route('providers.index')->with('alert', 'Thêm nhà cung cấp thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $providers = Providers::find($id);

        if (!$providers) {
            return redirect()->route('providers.index')->with('alert', "Nhà cung cấp không tồn tại!!");
        }

        return view('server.providers.details', compact('providers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $providers = Providers::find($id);

        $is_deleted = [
            (object) ['id' => 0, 'name' => 'Đã ngừng cung cấp'],
            (object) ['id' => 1, 'name' => 'Đang cung cấp']
        ];

        return view('server.providers.update', compact('providers', 'is_deleted'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $providers = Providers::find($id);

        if (empty($providers)) {
            return redirect()->route('providers.index')->with('alert', 'Nhà cung cấp không tồn tại!!');
        }

        $providers->name = $req->name;
        $providers->address = $req->address;

        $providers->email = $req->email;
        $providers->phone_number = $req->phone_number;

        $providers->descriptions = $req->descriptions;
        $providers->is_deleted = $req->is_deleted;

        $providers->save();

        return redirect()->route('providers.index')->with('alert', 'Cập nhật nhà cung cấp thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $providers = Providers::find($id);

        if (!$providers) {
            return redirect()->route('providers.index')->with('alert', "Nhà cung cấp không tồn tại!!");
        }

        if ($providers->is_deleted == 0) {
            return redirect()->route('providers.index')->with('alert', 'Nhà cung cấp đã được xóa trước đó rồi');
        }

        $providers->is_deleted = 0;
        $providers->save();

        return redirect()->route('providers.index')->with('alert', ' Xóa nhà cung cấp thành công');
    }
}
