<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
class CategoryProjectController extends Controller
{
    public function index()
    {
    	$list_category = DB::table('category_project')->select('*')->get();
    	return response()->json(['list_category' => $list_category]);
    }

    public function store(Request $request){
            $sendingForm = json_decode($request->storePost);
            $sendingForm = $sendingForm[0];
            $config = [
                'name' => $sendingForm->title,
                'status' => '1',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),

            ];
            $check = DB::table('category_project')->insert($config);
            if($check == true)
            {
            $msg = ['success' => 'Thêm mới thành công.!'];
            }else
            {
                $msg = ['error' => 'Thêm mới không thành công.!'];
            }

        return response()->json(['msg' => $msg, 'type' => 'alert-danger']);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $edit_category = DB::table('category_project')->where('id',$id)->first();
        return response()->json(['edit_category' => $edit_category]);  
    }

    public function update(Request $request){
            $sendingForm = json_decode($request->storePost);
            $sendingForm = $sendingForm[0];
            $config = [
                'name' => $sendingForm->name,
                'status' => '1',
                'updated_at' => date('Y-m-d'),

            ];
            $check = DB::table('category_project')->where('id', $sendingForm->id)->update($config);
            if($check == true)
            {
            $msg = ['success' => 'Cập nhật  thành công.!'];
            }
            else
            {
                $msg = ['error' => 'Cập nhật  không thành công.!'];
            }

        return response()->json(['msg' => $msg, 'type' => 'alert-danger']);
    }

    public function update_status(Request $request){
        
        $check_status = DB::table('category_project')->where('id',$request->id)->select('*')->first();

        if($check_status->status == 0)
        {
            $input = ['status' => 1];
        }
        elseif($check_status->status == 1)
        {
            $input = ['status' => 0];  
        }

        $check = DB::table('category_project')->where('id',$request->id)->update($input);
        if ($check == true) {
            $msg = ['success' => 'Update account successfully'];
        } else {
            $msg = ['error' => 'Error update account'];
        }
        return response()->json(['msg' => $msg]);
    }

    public function delete(Request $request){
        $id = $request->id;
        $check = DB::table('category_project')->where('id', $id)->delete();
        if($check == true)
        {
            $msg = ['success' => 'Đã xóa thành công'];
        }
        else
        {
            $msg = ['error' => 'Lỗi không thể xóa được'];
        }
        return response()->json(['msg' => $msg]);
    }
}
