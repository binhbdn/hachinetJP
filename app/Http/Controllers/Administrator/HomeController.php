<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index() {
        $user = Auth::user();
        return view('Admin.content.dashboard', ['user' => $user]);
    }
}
