<?php

namespace App\Http\Controllers\Server;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function dashboard()
    {
        return view('server.dashboards.index');
    }
}
