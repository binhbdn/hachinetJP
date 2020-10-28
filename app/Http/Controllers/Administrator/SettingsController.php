<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\HelperServices;
use App\Services\UploadServices;

class SettingsController extends Controller
{
    protected $helper;
    protected $upload;

    public function __construct() {
        $this->helper = new HelperServices();
        $this->upload = new UploadServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breadcrumb['name'] = 'Settings';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Settings';
        $strSql = "SELECT * FROM hcn_settings";
        $data = DB::select($strSql);
        $dataJp = array_merge([], array_filter($data, function($val) { return $val->lang == 'jp';}));
        $dataEn = array_merge([], array_filter($data, function($val) { return $val->lang == 'en';}));
        $dataVn = array_merge([], array_filter($data, function($val) { return $val->lang == 'vn';}));
        return view('Admin.content.settings.settings', [
            'breadcrumb' => (object)$breadcrumb,
            'dataJp' => $dataJp[0],
            'dataEn' => $dataEn[0],
            'dataVn' => $dataVn[0],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image_header = $request->textFile__header;
        $image_footer = $request->textFile__footer;
        $image_meta = $request->textFile__meta;
        $_fileName = $request->title_vn ? $this->helper->toSlug($request->title_vn) : date('YmdHis').'-hinh-anh-hachinet';
        
        $file_header = $request->textFile__header ? $this->upload->uploadFile($_fileName, $image_header) : $request->textFile__header_old;
        $file_footer = $request->textFile__footer ? $this->upload->uploadFile($_fileName, $image_footer) : $request->textFile__footer_old;
        $file_meta = $request->textFile__meta ? $this->upload->uploadFile($_fileName, $image_meta) : $request->textFile__meta_old;

        $dataInsert = [
            [
                'title'   =>  $request->title_jp,
                'logo_header'    =>  $file_header,
                'logo_footer'    =>  $file_footer,
                'description'  =>  $request->description_jp,
                'keywords'  =>  $request->keyword_jp,
                'lang'  =>  'jp',
                'locale'  =>  'ja_JP',
                'image'  =>  $file_meta,
                'facebook'  =>  $request->facebook,
                'twitter'  =>  $request->twitter,
                'instagram'  =>  $request->instagram,
                'linkedin'  =>  $request->linkedin,
                'youtube'  =>  $request->youtube,
            ],
            [
                'title'   =>  $request->title_en,
                'logo_header'    =>  $file_header,
                'logo_footer'    =>  $file_footer,
                'description'  =>  $request->description_en,
                'keywords'  =>  $request->keyword_en,
                'lang'  =>  'en',
                'locale'  =>  'en_US',
                'image'  =>  $file_meta,
                'facebook'  =>  $request->facebook,
                'twitter'  =>  $request->twitter,
                'instagram'  =>  $request->instagram,
                'linkedin'  =>  $request->linkedin,
                'youtube'  =>  $request->youtube,
            ],
            [
                'title'   =>  $request->title_vn,
                'logo_header'    =>  $file_header,
                'logo_footer'    =>  $file_footer,
                'description'  =>  $request->description_vn,
                'keywords'  =>  $request->keyword_vn,
                'lang'  =>  'vn',
                'locale'  =>  'vi_VN',
                'image'  =>  $file_meta,
                'facebook'  =>  $request->facebook,
                'twitter'  =>  $request->twitter,
                'instagram'  =>  $request->instagram,
                'linkedin'  =>  $request->linkedin,
                'youtube'  =>  $request->youtube,
            ]
        ];
        DB::table('hcn_settings')->delete();
        $ins = DB::table('hcn_settings')->insert($dataInsert);
        if ($ins) {
            return redirect()->route('settings.index')
            ->with('success', 'Successfully');
        }
        return redirect()->route('settings.create')
        ->with('error', 'Failed');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
