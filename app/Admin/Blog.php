<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog extends Model
{
    public static function list_blog()
    {
    	$list_blog = DB::table('blogs')->select('*')->get();
    	return $list_blog;
    }

}
