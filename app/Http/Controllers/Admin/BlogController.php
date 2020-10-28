<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
class BlogController extends Controller
{
    public function index()
    {
    	$list_blog = Blog::list_blog();
    	return response()->json(['list_blog' => $list_blog]);
    }

    public function store(Request $request){

            $uploadPath = base_path().'/public/upload/blog';
            $sendingForm = json_decode($request->storePost);
            $sendingForm = $sendingForm[0];
            $config = [
                'id_user' => Auth::user()->id,
                'title' => $sendingForm->title,
                'description' => $sendingForm->description,
                'content' => $sendingForm->content,
                'status' => '1',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),

            ];
            $allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
            $extension = (explode(".", $request->file('image')->getClientOriginalName()));
            $extension = end($extension);
            if(in_array($extension, $allowedExts)){
                if($request->file('image')){
                    $image = time().'.'.$request->file('image')->getClientOriginalName();
                    $request->file('image')->move($uploadPath, $image);
                    $config['images'] = $image;
                }
                $check = DB::table('blogs')->insert($config);
                if($check == true)
                {
                    $msg = ['success' => 'Thêm mới thành công.!'];
                }else
                {
                    $msg = ['error' => 'Thêm mới không thành công.!'];
                }
            }else{
                $msg = ['error' => 'Ảnh không hợp lệ.'];
            }
                

        return response()->json(['msg' => $msg, 'type' => 'alert-danger']);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $blog = DB::table('blogs')->where('id',$id)->first();
        return response()->json(['blog' => $blog]);  
    }

    public function update(Request $request){
            $uploadPath = base_path().'/public/upload/blog';
            $sendingForm = json_decode($request->storePost);
            $sendingForm = $sendingForm[0];
            $id = $request->id;

            $config = [
                'title' => $sendingForm->title,
                'description' => $sendingForm->description,
                'content' => $sendingForm->content,
                'status' => '1',
                'updated_at' => date('Y-m-d'),

            ];
            if($request->file('image')){
                $allowedExts = array ("gif","jpg","jpeg","png","GIF","JPG","JPEG","PNG");
                $extension = (explode(".",$request->file('image')->getClientOriginalName()));
                $extension = end($extension);
                if(in_array($extension, $allowedExts))
                {
                    $image = time().'.'.$request->file('image')->getClientOriginalName();
                    $request->file('image')->move($uploadPath, $image);
                    $config['images'] = $image;
                    $check = DB::table('blogs')->where('id', $id)->update($config);
                    if($check == true)
                    {
                    $msg = ['success' => 'Cập nhật  thành công.!'];
                    }
                    else
                    {
                        $msg = ['error' => 'Cập nhật  không thành công.!'];
                    }
                }
                else{
                    $msg = ['error' => 'Ảnh không hợp lệ.'];
                }
            }else{
                    $check = DB::table('blogs')->where('id', $id)->update($config);
                    if($check == true)
                    {
                    $msg = ['success' => 'Cập nhật  thành công.!'];
                    }
                    else
                    {
                        $msg = ['error' => 'Cập nhật  không thành công.!'];
                    }
            }
            

        return response()->json(['msg' => $msg, 'type' => 'alert-danger']);
    }

    public function update_status(Request $request){
        
        $check_status = DB::table('blogs')->where('id',$request->id)->select('*')->first();

        if($check_status->status == 0)
        {
            $input = ['status' => 1];
        }
        elseif($check_status->status == 1)
        {
            $input = ['status' => 0];  
        }

        $check = DB::table('blogs')->where('id',$request->id)->update($input);
        if ($check == true) {
            $msg = ['success' => 'Update account successfully'];
        } else {
            $msg = ['error' => 'Error update account'];
        }
        return response()->json(['msg' => $msg]);
    }

    public function delete(Request $request){
        $id = $request->id;
        $blog_images = $request->images;
        if($blog_images !== null){
            $blog_images = base_path().'/public/upload/blog/'.$blog_images;
            if(file_exists($blog_images)){
                unlink($blog_images);
            }
        }
        
        $check = DB::table('blogs')->where('id', $id)->delete();
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
