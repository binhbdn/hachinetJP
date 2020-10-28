<?php

namespace App\Http\Controllers;
use App\Admin\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class BlogController extends Controller
{
    public function index()
    {
		$list_blog = DB::table('blogs')->select('*')->where('status','1')->orderBy('created_at','desc')->paginate(5);
		return view('blog', ['list_blog' => $list_blog]);
	}

	public function show($id, $slung='')
	{
		$blog = DB::table('blogs')->join('users', 'blogs.id_user', '=', 'users.id')
		->where('blogs.status','1')
		->where('blogs.id',$id)
		->select('*','users.id as id_users', 'blogs.id as blog_id')
		->first();
		// $relaties = DB::table('blog')->join('admins', 'admins.id', '=', 'blog.user_id')
		// ->select('*','admins.id as id_user', 'blog.id as blog_id')
		// ->where('blog.status','1')
		// ->orderBy('blog.id', 'DESC')
		// ->limit(6)->get();
		
		return view('blog-details', ['blog' => $blog]);
	} 

	public function search(Request $req){
		$search_blog = DB::table('blogs')->select('*')
		->where('title','like','%'.$req->txtSearch.'%')
		->where('description','like','%'.$req->txtSearch.'%')
		->paginate(5);

		return view('blog-search',['search_blog' => $search_blog]);
	}
	
	public function tag(){
		return view('blog-tag');
	}

}
