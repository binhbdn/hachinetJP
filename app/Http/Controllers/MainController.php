<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Subscriber;
use LaravelLocalization;
use App\Mail\InviteSubscribeUser;
use Mail;
use DB;
class MainController extends Controller
{
    public function index(Request $request) {
        $blog = DB::table('blogs')->join('users', 'users.id', '=', 'blogs.id_user')
        ->where('blogs.status','1')
        ->orderBy('blogs.id', 'DESC')
        ->select('*','users.id as id_users', 'blogs.id as blog_id','blogs.created_at as blog_created_at')
        ->paginate(6);
        return view('home',['blog' => $blog]);
    }

    public function project(Request $request) {
        $project = DB::table('project')->join('users', 'users.id', '=', 'project.id_user')
        ->where('project.status','1')
        ->orderBy('project.id', 'DESC')
        ->select('*','users.id as id_users', 'project.id as blog_id','project.created_at as blog_created_at')
        ->get();
        $list_category = DB::table('category_project')->select('*')->get();
        return view('project',['project' => $project, 'list_category' => $list_category]);
    }


    public function search(Request $request) {
        return view("search");
    }

    public function searchAjax(Request $request) {
        $query = $request->input("query");

        $products = Product::get()->filter(function($item) use ($query) {
            return $item->translate->every(function($item) use ($query) {
                return stripos($item->translate->name, $query) !== false;
            });
        });
        
        return $products;
    }

    public function subscribeUser(Request $request) {
        $email = $request->input("email");

        if ( ! empty($email)) {

            if ( ! Subscriber::where('email', $email)->count()) {
                $subscriber = new Subscriber;
                $subscriber->email = $email;
                $subscriber->status = "subscribe";
                $subscriber->save();
                
                Mail::to(env('ADMIN_EMAIL', 'admin@admin.com'))->send(new InviteSubscribeUser($email));

                return back()->with(['status' => 'success', 'message' => __('messages.success_subscribe')]);
            }
            return back()->with(['status' => 'warning', 'message' => __('messages.subscriber_already_exist')]);
        }
        
        return back()->with(['status' => 'danger', 'message' => __('messages.error_success')]);
    }

    public function business(){
        return view('business');
    }
    public function net(){
        return view('net');
    }
    public function developer(){
        return view('developer');
    }
    public function websiteDevelopment(){
        return view('website-development');
    }
    public function java(){
        return view('java');
    }
}
