<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;
use Response;
use DB;
use Illuminate\Support\Facades\Hash;
class SettingController extends Controller
{
    
    public function index(){
        $data['listSetting'] = DB::table('settings')->orderBy('id','DESC')->get();
        return response::json(['data' => $data]);
    }

    public function store(Request $request){
    		$settings = DB::table('settings')->select('*')->count();
    		if($settings > 0)
    		{
    			$msg = ['error' => 'tạo mới không thành công vì Cài đặt thông tin web đã tồn tại, vui lòng sửa lại'];
    		}
    		else
    		{
	            $uploadPath = base_path().'/public/upload/setting';
	            $sendingForm = json_decode($request->storePost);
	            $sendingForm = $sendingForm[0];
	            $config = [
	                'seo_title' => $sendingForm->seo_title,
	                'seo_keyword' => $sendingForm->seo_keyword,
	                'seo_description' => $sendingForm->seo_description,
	                'company_contact' => $sendingForm->company_contact,
	                'company_address' => $sendingForm->company_address,
	                'company_phone' => $sendingForm->company_phone,
	                'from_name' => $sendingForm->from_name,
	                'from_email' => $sendingForm->from_email,
	                'facebook' => $sendingForm->facebook,
	                'intragam' => $sendingForm->intragam,
	                'twitter' => $sendingForm->twitter,
	                'google' => $sendingForm->google,
	                'copyright_text' => $sendingForm->copyright_text,
	                'footer_text' => $sendingForm->footer_text,
	                'google_analytics' => $sendingForm->google_analytics,
	                'status' => '1',
	                'created_at' => date('Y-m-d'),
	                'updated_at' => date('Y-m-d'),

				];
				$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
				$extension = (explode(".", $request->file('logo')->getClientOriginalName()));
				$extension = end($extension);
				if(in_array($extension, $allowedExts)){
					if($request->file('logo')){
						$logo = time().'.'.$request->file('logo')->getClientOriginalName();
						$request->file('logo')->move($uploadPath, $logo);
						$config['logo'] = $logo;
					}
				}else{
					$msg = ['error' => 'Ảnh không hợp lệ'];
					return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
				}
				$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
				$extension = (explode(".", $request->file('logoheader')->getClientOriginalName()));
				$extension = end($extension);
				if(in_array($extension, $allowedExts)){
					if($request->file('logoheader')){
						$logoheader = time().'.'.$request->file('logoheader')->getClientOriginalName();
						$request->file('logoheader')->move($uploadPath, $logoheader);
						$config['logoheader'] = $logoheader;
					}
				}else{
					$msg = ['error' => 'Ảnh không hợp lệ'];
					return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
				}	

				$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
				$extension = (explode(".", $request->file('logofooter')->getClientOriginalName()));
				$extension = end($extension);
				if(in_array($extension, $allowedExts)){
					if($request->file('logofooter')){
						$logofooter = time().'.'.$request->file('logofooter')->getClientOriginalName();
						$request->file('logofooter')->move($uploadPath, $logofooter);
						$config['logofooter'] = $logofooter;
					}
				}else{
					$msg = ['error' => 'Ảnh không hợp lệ'];
					return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
				}	
				
				$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
				$extension = (explode(".", $request->file('favicon')->getClientOriginalName()));
				$extension = end($extension);
				if(in_array($extension, $allowedExts)){
					if($request->file('favicon')){
						$favicon = time().'.'.$request->file('favicon')->getClientOriginalName();
						$request->file('favicon')->move($uploadPath, $favicon);
						$config['favicon'] = $favicon;
					}
				}else{
					$msg = ['error' => 'Ảnh không hợp lệ'];
					return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
				}	
					
					
	            $check = DB::table('settings')->insert($config);
	            if($check == true)
	            {
	            	$msg = ['success' => 'Cập nhật thông tin web thành công.!'];
	            }else
	            {
	                $msg = ['error' => 'Cập nhật thông tin web không thành công.!'];
	            }
            }

        return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $settings = DB::table('settings')->where('id',$id)->first();
        return response::json(['settings' => $settings]);  
    }

    public function update(Request $request){
            $uploadPath = base_path().'/public/upload/setting';
            $sendingForm = json_decode($request->storePost);
            $sendingForm = $sendingForm[0];
            $id = $request->id;

	            $config = [
	                'seo_title' => $sendingForm->seo_title,
	                'seo_keyword' => $sendingForm->seo_keyword,
	                'seo_description' => $sendingForm->seo_description,
	                'company_contact' => $sendingForm->company_contact,
	                'company_address' => $sendingForm->company_address,
	                'company_phone' => $sendingForm->company_phone,
	                'from_name' => $sendingForm->from_name,
	                'from_email' => $sendingForm->from_email,
	                'facebook' => $sendingForm->facebook,
	                'intragam' => $sendingForm->intragam,
	                'twitter' => $sendingForm->twitter,
	                'google' => $sendingForm->google,
	                'copyright_text' => $sendingForm->copyright_text,
	                'footer_text' => $sendingForm->footer_text,
	                'google_analytics' => $sendingForm->google_analytics,
	                'updated_at' => date('Y-m-d'),

	            ];
	            if($request->file('logo')){
					$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
					$extension = (explode(".", $request->file('logo')->getClientOriginalName()));
					$extension = end($extension);
					if(in_array($extension, $allowedExts)){
						$logo = time().'.'.$request->file('logo')->getClientOriginalName();
	                	$request->file('logo')->move($uploadPath, $logo);
	                	$config['logo'] = $logo;
					}else{
						$msg = ['error' => 'Ảnh không hợp lệ'];
						return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
					}	

				}
				
				if($request->file('logoheader')){
					$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
					$extension = (explode(".", $request->file('logoheader')->getClientOriginalName()));
					$extension = end($extension);
					if(in_array($extension, $allowedExts)){
						$logoheader = time().'.'.$request->file('logoheader')->getClientOriginalName();
						$request->file('logoheader')->move($uploadPath, $logoheader);
						$config['logoheader'] = $logoheader;
					}else{
						$msg = ['error' => 'Ảnh không hợp lệ'];
						return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
					}	

	            }

				

				if($request->file('logofooter')){
					$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
					$extension = (explode(".", $request->file('logofooter')->getClientOriginalName()));
					$extension = end($extension);
					if(in_array($extension, $allowedExts)){
						$logofooter = time().'.'.$request->file('logofooter')->getClientOriginalName();
						$request->file('logofooter')->move($uploadPath, $logofooter);
						$config['logofooter'] = $logofooter;
					}else{
						$msg = ['error' => 'Ảnh không hợp lệ'];
						return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
					}	

				}
				
				if($request->file('favicon')){
					$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
					$extension = (explode(".", $request->file('favicon')->getClientOriginalName()));
					$extension = end($extension);
					if(in_array($extension, $allowedExts)){
						$favicon = time().'.'.$request->file('favicon')->getClientOriginalName();
						$request->file('favicon')->move($uploadPath, $favicon);
						$config['favicon'] = $favicon;
					}else{
						$msg = ['error' => 'Ảnh không hợp lệ'];
						return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
					}	

				}

            $check = DB::table('settings')->where('id', $id)->update($config);
            if($check == true)
            {
            $msg = ['success' => 'Cập nhật thông tin web thành công.!'];
            }
            else
            {
                $msg = ['error' => 'Cập nhật thông tin web không thành công.!'];
            }

        return Response::json(['msg' => $msg, 'type' => 'alert-danger']);
    }

    public function delete(Request $request){
        $id = $request->id;
        $logo = $request->logo;
        if($logo !== null){
            $logo = base_path().'/public/upload/'.$logo;
            if(file_exists($logo)){
                unlink($logo);
            }
        }
        
        $check = DB::table('settings')->where('id', $id)->delete();
        if($check == true)
        {
            $msg = ['success' => 'Đã xóa thành công'];
        }
        else
        {
            $msg = ['error' => 'Lỗi không thể xóa được'];
        }
        return Response::json(['type' => 'alert-warning', 'msg' => $msg]);
    }

}
