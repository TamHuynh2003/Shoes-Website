<?php

namespace App\Http\Controllers\Server;

use App\Models\Roles;
use App\Models\Admins;
use App\Models\Genders;
use App\Models\UserStates;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\LoginAdminsRequest;
use App\Http\Requests\StoreAdminsRequest;

class AdminsController extends Controller
{

    public function login()
    {
        return view('server.login');
    }

    public function loginHandle(LoginAdminsRequest $req)
    {
        $admins = Admins::where('username', $req->username)->first();

        if ($admins) {
            if ($admins->status_id == 1) {

                if (Auth::attempt(['username' => $req->username, 'password' => $req->password])) {
                    return redirect()->route('dashboards.index');
                } else {
                    return redirect()->route('login')->with('alert', 'Sai mật khẩu !!');
                }
            } elseif ($admins->status_id == 2) {
                return redirect()->route('login')->with('alert', 'Tài khoản của bạn đã bị khóa !!');
            }
        } else {
            return redirect()->route('login')->with('alert', 'Truy cập bị từ chối!!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function getLoginUser()
    {
        if (Auth::check()) {
            $username = Auth::user()->username;
            return $username;
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listAdmins = Admins::all()->where('status_id', 1);

        $genders = Genders::all();
        $roles = Roles::all();
        $status = UserStates::all();

        return view('server.admins.index', compact('listAdmins', 'genders', 'roles', 'status'));
    }

    public function trash()
    {
        $listAdmins = Admins::all()->where('status_id', 2);

        $genders = Genders::all();
        $roles = Roles::all();
        $status = UserStates::all();

        return view('server.admins.trash', compact('listAdmins', 'genders', 'roles', 'status'));
    }

    public function search(Request $req)
    {
        $keyword = $req->input('data');

        $listAdmins = Admins::where('fullname', 'like', "%$keyword%")->where('status_id', 1)->get();

        return view('server.admins.search', compact('listAdmins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admins = Admins::all();
        $genders = Genders::all();

        return view('server.admins.create', compact('admins', 'genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminsRequest $req)
    {
        $admins = new Admins();

        $admins->fullname = $req->fullname;
        $admins->email = $req->email;

        $admins->address = $req->address;
        $admins->phone_number = $req->phone_number;

        $admins->username = $req->username;
        $admins->password = Hash::make($req->password);

        $admins->birth_date = $req->birth_date;

        // if ($req->hasFile('avatar')) {

        //     $file = $req->file('avatar');

        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extention;

        //     $file->move('images/admins/', $filename);
        //     // $path = $file->store('admin_images', 'public');

        //     $admins->avatar = $filename;
        // }

        if ($req->hasFile('avatar')) {

            $file = $req->file('avatar');
            $imageName = $file->getClientOriginalName();

            // $path = $file->store('admin_images', 'public');
            $path = $file->storeAs('images/admins', $imageName);
            $admins->avatar = $path;
        }

        $admins->salary = $req->salary;
        $admins->login_at = $req->login_at;

        $admins->genders_id = $req->genders_id;
        $admins->roles_id = 1;

        $admins->save();

        return redirect()->route('admins.index')->with('alert', 'Tạo tài khoản quản trị viên thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admins = Admins::find($id);

        if (!$admins) {
            return redirect()->route('admins.index')->with('alert', "Tài khoản quản trị viên không tồn tại!!");
        }

        return view('server.admins.details', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admins = Admins::find($id);

        $genders = Genders::all();
        $status = UserStates::all();

        return view('server.admins.update', compact('admins', 'genders', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        $admins = Admins::find($id);

        if (empty($admins)) {
            return redirect()->route('admins.index')->with('alert', 'Tài khoản quản trị viên không tồn tại!!');
        }

        $admins->fullname = $req->fullname;
        $admins->email = $req->email;

        $admins->address = $req->address;
        $admins->phone_number = $req->phone_number;

        $admins->username = $req->username;
        $admins->password = $req->password;

        $admins->birth_date = $req->birth_date;
        $admins->salary = $req->salary;

        $admins->genders_id = $req->genders_id;
        $admins->status_id = $req->status_id;

        // if ($req->hasFile('avatar')) {

        //     $old_image = 'images/admins/' . $admins->avatar;
        //     $old_image = 'images/admins/' . $admins->image;
        //     $old_image = public_path('images/admins/' . $admins->image);

        //     if (File::exists($old_image)) {
        //         File::exists($old_image);
        //     }

        //     $file = $req->file('avatar');
        //     $extention = $file->getClientOriginalExtension();

        //     $filename = time() . '.' . $extention;
        //     $file->move('images/admins/', $filename);
        //     // $path = $file->store('admin_images', 'public');

        //     $admins->avatar = $filename;
        // }
        if ($req->hasFile('avatar')) {

            $file = $req->file('avatar');
            $imageName = $file->getClientOriginalName();

            // $path = $file->store('admin_images', 'public');
            $path = $file->storeAs('images/admins', $imageName);
            $admins->avatar = $path;
        }

        $admins->save();

        return redirect()->route('admins.index')->with('alert', 'Cập nhật tài khoản quản trị viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admins = Admins::find($id);

        if (!$admins) {
            return redirect()->route('admins.index')->with('alert', "Tài khoản quản trị viên không tồn tại!!");
        }

        if ($admins->status_id == 2) {
            return redirect()->route('admins.index')->with('alert', 'Tài khoản đã được xóa trước đó rồi!!');
        }

        $admins->status_id = 2;
        $admins->save();

        return redirect()->route('admins.index')->with('alert', 'Xóa tài khoản quản trị viên thành công');
    }
}
