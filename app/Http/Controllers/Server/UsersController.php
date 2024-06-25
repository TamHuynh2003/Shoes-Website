<?php

namespace App\Http\Controllers\Server;

use App\Models\Users;

use App\Models\Roles;
use App\Models\Genders;
use App\Models\UserStates;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listUsers = Users::all()->where('status_id', 1);

        $genders = Genders::all();
        $roles = Roles::all();
        $status = UserStates::all();

        return view('server.users.index', compact('listUsers', 'genders', 'roles', 'status'));
    }

    public function trash()
    {
        $listUsers = Users::all()->where('status_id', 2);

        $genders = Genders::all();
        $roles = Roles::all();
        $status = UserStates::all();

        return view('server.users.trash', compact('listUsers', 'genders', 'roles', 'status'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listUsers = Users::where('fullname', 'like', "%$keyword%")->where('status_id', 1)->get();

        return view('server.users.search', compact('listUsers'));
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
        $users = Users::find($id);

        if (!$users) {
            return redirect()->route('users.index')->with('alert', "Tài khoản người dùng không tồn tại !!");
        }

        return view('server.users.details', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = Users::find($id);

        $genders = Genders::all();
        $status = UserStates::all();

        return view('server.users.update', compact('users', 'genders', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req,  $id)
    {
        $users = Users::find($id);

        if (empty($users)) {
            return redirect()->route('users.index')->with('alert', 'Tài khoản người dùng không tồn tại!!');
        }

        $users->fullname = $req->fullname;
        $users->email = $req->email;

        $users->address = $req->address;
        $users->phone_number = $req->phone_number;

        $users->password = $req->password;
        $users->birth_date = $req->birth_date;

        $users->genders_id = $req->genders_id;
        $users->status_id = $req->status_id;

        if ($req->hasFile('avatar')) {

            // $old_image = 'images/users/' . $users->avatar;

            // if (File::exists($old_image)) {
            //     File::exists($old_image);
            // }

            $file = $req->file('avatar');
            $imageName = $file->getClientOriginalName();

            // $path = $file->store('admin_images', 'public');
            $path = $file->storeAs('images/users', $imageName);
            $users->avatar = $path;
        }

        $users->save();

        return redirect()->route('users.index')->with('alert', 'Cập nhật tài khoản người dùng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = Users::find($id);

        if (!$users) {
            return redirect()->route('users.index')->with('alert', "Tài khoản người dùng không tồn tại !!");
        }

        if ($users->status_id == 2) {
            return redirect()->route('users.index')->with('alert', 'Tài khoản người dùng đã được xóa trước đó !!');
        }

        $users->status_id = 2;
        $users->save();

        return redirect()->route('users.index')->with('alert', 'Xóa tài khoản người dùng thành công');
    }
}
