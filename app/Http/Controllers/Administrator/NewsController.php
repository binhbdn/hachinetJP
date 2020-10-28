<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NewsServices;
use App\Services\HelperServices;
use App\Services\UploadServices;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    protected $_news;
    protected $_helper;
    protected $_upload;

    public function __construct() {
        $this->_news = new NewsServices();
        $this->_helper = new HelperServices();
        $this->_upload = new UploadServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $breadcrumb['name'] = 'List News';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List News';
        $breadcrumb['btn_text'] = 'Add new News';
        $breadcrumb['route_name']   = 'news.create';
        $limit = 15;
        $totalNews = $this->_news->countTotalNews();
        $totalPage = (int)$totalNews > (int)$limit ? ceil((int)$totalNews/(int)$limit) : 1;
        $arrPage = [];
        for ($i=0; $i < $totalPage; $i++) { 
        	$arrPage[] = $i + 1;
        }
        $offset = isset($request->page) ? (int)$limit * ((int)$request->page - 1) : 0;
        $data = $this->_news->getListNews($offset, $limit);
        foreach ($data as $key => $val) {
            $data[$key]->postTitle = [
                'JP: '.$val->TitleJP, 'EN: '.$val->TitleEn, 'VN: '.$val->TitleVN
            ];
        }
        return view('Admin.content.news.list', [
            'breadcrumb' => (object)$breadcrumb,
            'news'  =>  $data,
            'arrPage'	=>	$arrPage
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
        $breadcrumb['name'] = 'Add new News';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Add new News';
        $breadcrumb['parent'] = 'List News';
        $breadcrumb['parent_name']   = 'news.index';
        return view('Admin.content.news.create', ['breadcrumb' => (object)$breadcrumb]);
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
        request()->validate([
            'title_jp' => 'required',
            'post_content_jp' => 'required',
            'title_en' => 'required',
        ]);
        $imageData = $request->thumbnail;
        $_fileName = $this->_helper->toSlug($request->title_vn);
        $file = $request->thumbnail ? $this->_upload->uploadFile($_fileName, $imageData) : '';
        $postId = date('YmdHis');
        $dataPost = [
            'id'   =>  $postId,
            'postSlug'    =>  $this->_helper->toSlug($request->title_en),
            'userId'    =>  Auth::user()->id,
            'postThumb'  =>  $file,
            'createdAt' =>  strtotime(date('Y-m-d H:i:s'))
        ];
        $IPost = $this->_news->addNew($dataPost);
        if ($IPost) {
            $dataDetails = [
                [
                    'postId'    =>  $postId,
                    'postTitle' =>  $request->title_jp,
                    'postContent'   =>  $request->post_content_jp,
                    'postDesc'  =>  $request->description_jp,
                    'postLang'  =>  'jp',
                    'postKeywords'  =>  $request->keyword_jp,
                    'postTags'  =>  $request->tags_jp,
                ],
                [
                    'postId'    =>  $postId,
                    'postTitle' =>  $request->title_en,
                    'postContent'   =>  $request->post_content_en,
                    'postDesc'  =>  $request->description_en,
                    'postLang'  =>  'en',
                    'postKeywords'  =>  $request->keyword_en,
                    'postTags'  =>  $request->tags_en,
                ],
                [
                    'postId'    =>  $postId,
                    'postTitle' =>  $request->title_vn,
                    'postContent'   =>  $request->post_content_vn,
                    'postDesc'  =>  $request->description_vn,
                    'postLang'  =>  'vn',
                    'postKeywords'  =>  $request->keyword_vn,
                    'postTags'  =>  $request->tags_vn,
                ],
            ];
            $IDPost = $this->_news->addNewDetails($dataDetails);
            if ($IDPost) {
                return redirect()->route('news.index')
                ->with('success', 'Add new successfully');
            } else {
                return redirect()->route('news.create')
                ->with('error', 'Fail');
            }
        } else {
            return redirect()->route('news.create')
            ->with('error', 'Fail');
        }
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
        $breadcrumb['name'] = 'Edit News';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Edit News';
        $breadcrumb['parent'] = 'List News';
        $breadcrumb['parent_name']   = 'news.index';
        $data = $this->_news->getNewsById($id);
        $dataJp = array_merge([], array_filter($data, function($val) { return $val->postLang == 'jp';}));
        $dataEn = array_merge([], array_filter($data, function($val) { return $val->postLang == 'en';}));
        $dataVn = array_merge([], array_filter($data, function($val) { return $val->postLang == 'vn';}));
        
        return view('Admin.content.news.edit', [
            'breadcrumb' => (object)$breadcrumb,
            'dataJp'    =>  $dataJp[0],
            'dataEn'    =>  $dataEn[0],
            'dataVn'    =>  $dataVn[0],
        ]);
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
        $imageData = $request->thumbnail;
        $_fileName = $this->_helper->toSlug($request->title_vn);
        $file = $request->thumbnail ? $this->_upload->uploadFile($_fileName, $imageData) : '';
        $dataUp = [
            'postSlug'    =>  $this->_helper->toSlug($request->title_en),
            'postThumb'  =>  $file ? $file : $request->old_thumbnail,
            'updatedAt' =>  strtotime(date('Y-m-d H:i:s'))
        ];
        $upNews = $this->_news->updateNews($dataUp, $id);
        if ($upNews !== false) {
            $dataDetails = [
                [
                    'postId'    =>  $id,
                    'postTitle' =>  $request->title_jp,
                    'postContent'   =>  $request->post_content_jp,
                    'postDesc'  =>  $request->description_jp,
                    'postLang'  =>  'jp',
                    'postKeywords'  =>  $request->keyword_jp,
                    'postTags'  =>  $request->tags_jp,
                ],
                [
                    'postId'    =>  $id,
                    'postTitle' =>  $request->title_en,
                    'postContent'   =>  $request->post_content_en,
                    'postDesc'  =>  $request->description_en,
                    'postLang'  =>  'en',
                    'postKeywords'  =>  $request->keyword_en,
                    'postTags'  =>  $request->tags_en,
                ],
                [
                    'postId'    =>  $id,
                    'postTitle' =>  $request->title_vn,
                    'postContent'   =>  $request->post_content_vn,
                    'postDesc'  =>  $request->description_vn,
                    'postLang'  =>  'vn',
                    'postKeywords'  =>  $request->keyword_vn,
                    'postTags'  =>  $request->tags_vn,
                ],
            ];
            $upDetails = $this->_news->updateNewsDetails($dataDetails, $id);
            if ($upDetails) {
                return redirect()->route('news.index')
                ->with('success', 'Updated successfully');
            } else {
                return redirect()->route('news.edit')
                ->with('error', 'Fail');
            }
        } else {
            return redirect()->route('news.edit')
            ->with('error', 'Fail');
        }
    }

    public function updateStatus(Request $request) {
        
        $data = ['postStatus' => $request->status == 'true' ? 1 : 0];
        $update = $this->_news->updateStatusNews($data, $request->id);
        if ($update !== false) {
            echo 'true';
            return;
        }
        echo 'false';
        return;
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
