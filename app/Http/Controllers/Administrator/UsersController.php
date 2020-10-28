<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UsersController extends Controller
{
    //
    public function __construct() {}

    public function index() {
        $breadcrumb['name'] = 'List Users';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Users';
        $breadcrumb['btn_text'] = 'Add new User';
        $breadcrumb['route_name']   = 'users.create';
        return view('Admin.content.users.list', ['breadcrumb' => (object)$breadcrumb]);
    }
}
