<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\HelperServices;
use App\Services\UploadServices;

class MediaController extends Controller
{
    protected $upload;

    public function __construct() {
        $this->upload = new UploadServices();
        $this->_helper = new HelperServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breadcrumb['name'] = 'List Media';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Media';

        return view('Admin.content.media.list', [
            'breadcrumb' => (object)$breadcrumb,
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


    public function mediaUploading(Request $request) {
    	// $fileName = isset($request->fileName) ? $this->_helper->toSlug($request->fileName) : 'hinh-anh-bai-viet';
    	$fileName = 'hinh-anh-bai-viet';
        $location = $this->upload->uploadImageInTinymce($request->file, $fileName);
        if (count($location) > 0) {
            $imgUrl = url('../upload/'.$location[0]);
            return ['location' => $imgUrl];
        }
    }
}
