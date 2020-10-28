<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UploadServices;
use App\Services\HelperServices;
use App\Services\CaseStudyServices;

class CaseStudyController extends Controller
{
    protected $upload;
    protected $helper;
    protected $case;

    public function __construct() {
        $this->upload = new UploadServices();
        $this->helper = new HelperServices();
        $this->case = new CaseStudyServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $breadcrumb['name'] = 'List Case Study';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Case Study';
        $breadcrumb['btn_text'] = 'Add new Case';
        $breadcrumb['route_name']   = 'case-study.create';
        $limit = 15;
        $total = $this->case->countTotal();
        $totalPage = (int)$total > (int)$limit ? ceil((int)$total/(int)$limit) : 1;
        $arrPage = [];
        for ($i=0; $i < $totalPage; $i++) { 
            $arrPage[] = $i + 1;
        }
        $offset = $request->page ? (int)$request->page + (int)$limit : 0;
        $data = $this->case->getListProducts($offset, $limit);
        foreach ($data as $key => $val) {
            $data[$key]->productImages = explode(',', $val->productImages);
            $data[$key]->productTitle = [
                'JP: '.$val->TitleJP, 'EN: '.$val->TitleEn, 'VN: '.$val->TitleVN
            ];
        }
        return view('Admin.content.case_study.list', [
            'breadcrumb' => (object)$breadcrumb,
            'products'  =>  $data,
            'arrPage'   =>  $arrPage
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
        $breadcrumb['name'] = 'Add new Case Study';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Add new Case Study';
        $breadcrumb['parent'] = 'List Case Study';
        $breadcrumb['parent_name']   = 'case-study.index';
        return view('Admin.content.case_study.create', ['breadcrumb' => (object)$breadcrumb]);
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
            'title_vn' => 'required',
            'listImages'    =>  'required'
        ]);
        $files = $request->listImages ? json_decode($request->listImages) : [];
        $_fileName = $this->helper->toSlug($request->title_vn);
        $slug = $this->helper->toSlug($request->title_vn);

        if (count($files) > 0) {
            $listImages = $this->upload->uploadMultipleFileContent($files, $_fileName, 'casestudy');
            $postId = date('YmdHis');
            $oneData = [
                'id'    =>  $postId,
                'productSlug'   =>  $slug,
                'productImages' =>  implode(",",$listImages),
                'createdAt' =>  strtotime(date('Y-m-d H:i:s'))
            ];
            $add = $this->case->addProducts($oneData);
            if ($add) {
                $dataDetails = [
                    [
                        'productId'    =>  $postId,
                        'productTitle' =>  $request->title_jp,
                        'productContent'   =>  $request->product_content_jp,
                        'productIndustry'  =>  $request->industry_jp,
                        'productLang'  =>  'jp',
                        'productOverview'  =>  $request->overview_jp,
                        'productTech'   =>  $request->tech_jp,
                        'productResponsibility'   =>  $request->responsibility_jp,
                    ],
                    [
                        'productId'    =>  $postId,
                        'productTitle' =>  $request->title_en,
                        'productContent'   =>  $request->product_content_en,
                        'productIndustry'  =>  $request->industry_en,
                        'productLang'  =>  'en',
                        'productOverview'  =>  $request->overview_en,
                        'productResponsibility'   =>  $request->responsibility_en,
                        'productTech'   =>  $request->tech_en
                    ],
                    [
                        'productId'    =>  $postId,
                        'productTitle' =>  $request->title_vn,
                        'productContent'   =>  $request->product_content_vn,
                        'productIndustry'  =>  $request->industry_vn,
                        'productLang'  =>  'vn',
                        'productOverview'  =>  $request->overview_vn,
                        'productResponsibility'   =>  $request->responsibility_vn,
                        'productTech'   =>  $request->tech_vn
                    ],
                ];
                $IDPost = $this->case->addProductsDetails($dataDetails);
                if ($IDPost) {
                    return redirect()->route('case-study.index')
                    ->with('success', 'Add new successfully');
                } else {
                    return redirect()->route('case-study.create')
                    ->with('error', 'Fail');
                }
            }
            return;
        }
        return redirect()->route('case-study.create')
        ->with('no_image', 'Need upload picture, min one picture.');
        // $d = $this->upload->uploadMultipleFileContent($files, 'day la 1 buc anh dep', 'casestudy');
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
        $breadcrumb['name'] = 'Edit Case Study';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Edit Case Study';
        $breadcrumb['parent'] = 'List Case Study';
        $breadcrumb['parent_name']   = 'case-study.index';
        $data = $this->case->getProductById($id);
        foreach ($data as $key => $val) {
            $data[$key]->oldImages = $val->productImages;
            $data[$key]->productImages = explode(',', $val->productImages);
        }
        $dataJp = array_merge([], array_filter($data, function($val) { return $val->productLang == 'jp';}));
        $dataEn = array_merge([], array_filter($data, function($val) { return $val->productLang == 'en';}));
        $dataVn = array_merge([], array_filter($data, function($val) { return $val->productLang == 'vn';}));
        
        return view('Admin.content.case_study.edit', [
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
        $files = $request->listImages ? json_decode($request->listImages) : [];
        $_fileName = $this->helper->toSlug($request->title_vn);
        $slug = $this->helper->toSlug($request->title_vn);
        if (count($files) > 0) { 
            $listImages = $this->upload->uploadMultipleFileContent($files, $_fileName, 'casestudy');
            $productImages = $request->old_listImages ? $request->old_listImages .','. implode(",",$listImages) : implode(",",$listImages);
            $oneData = [
                'productImages' => $productImages,
                'productSlug'   =>  $slug
            ];
            $update = $this->case->updateProducts($oneData, $id);
            if ($update !== false) {
                $dataDetails = [
                    [
                        'productId'    =>  $id,
                        'productTitle' =>  $request->title_jp,
                        'productContent'   =>  $request->product_content_jp,
                        'productIndustry'  =>  $request->industry_jp,
                        'productLang'  =>  'jp',
                        'productOverview'  =>  $request->overview_jp,
                        'productResponsibility'   =>  $request->responsibility_jp,
                        'productTech'   =>  $request->tech_jp
                    ],
                    [
                        'productId'    =>  $id,
                        'productTitle' =>  $request->title_en,
                        'productContent'   =>  $request->product_content_en,
                        'productIndustry'  =>  $request->industry_en,
                        'productLang'  =>  'en',
                        'productOverview'  =>  $request->overview_en,
                        'productResponsibility'   =>  $request->responsibility_en,
                        'productTech'   =>  $request->tech_en
                    ],
                    [
                        'productId'    =>  $id,
                        'productTitle' =>  $request->title_vn,
                        'productContent'   =>  $request->product_content_vn,
                        'productIndustry'  =>  $request->industry_vn,
                        'productLang'  =>  'vn',
                        'productOverview'  =>  $request->overview_vn,
                        'productResponsibility'   =>  $request->responsibility_vn,
                        'productTech'   =>  $request->tech_vn
                    ],
                ];
                $updetails = $this->case->updateProductsDetails($dataDetails, $id);
                if ($updetails) {
                    return redirect()->route('case-study.index')
                    ->with('success', 'Updated successfully');
                } else {
                    return redirect()->route('case-study.edit')
                    ->with('error', 'Fail to update.');
                }
            } else {
                return redirect()->route('case-study.edit')
                    ->with('error', 'Fail to update.');
            }
        } else {
            if ($request->old_listImages) {
                $oneData = [
                    'productImages' => $request->old_listImages
                ];
                $update = $this->case->updateProducts($oneData, $id);
                if ($update !== false) {
                    $dataDetails = [
                        [
                            'productId'    =>  $id,
                            'productTitle' =>  $request->title_jp,
                            'productContent'   =>  $request->product_content_jp,
                            'productIndustry'  =>  $request->industry_jp,
                            'productLang'  =>  'jp',
                            'productOverview'  =>  $request->overview_jp,
                            'productResponsibility'   =>  $request->responsibility_jp,
                            'productTech'   =>  $request->tech_jp
                        ],
                        [
                            'productId'    =>  $id,
                            'productTitle' =>  $request->title_en,
                            'productContent'   =>  $request->product_content_en,
                            'productIndustry'  =>  $request->industry_en,
                            'productLang'  =>  'en',
                            'productOverview'  =>  $request->overview_en,
                            'productResponsibility'   =>  $request->responsibility_en,
                            'productTech'   =>  $request->tech_en
                        ],
                        [
                            'productId'    =>  $id,
                            'productTitle' =>  $request->title_vn,
                            'productContent'   =>  $request->product_content_vn,
                            'productIndustry'  =>  $request->industry_vn,
                            'productLang'  =>  'vn',
                            'productOverview'  =>  $request->overview_vn,
                            'productResponsibility'   =>  $request->responsibility_vn,
                            'productTech'   =>  $request->tech_vn
                        ],
                    ];
        
                    $updetails = $this->case->updateProductsDetails($dataDetails, $id);
                    if ($updetails) {
                        return redirect()->route('case-study.index')
                        ->with('success', 'Updated successfully');
                    } else {
                        return redirect()->route('case-study.edit')
                        ->with('error', 'Fail to update.');
                    }
                } else {
                    return redirect()->route('case-study.edit')
                        ->with('error', 'Fail to update.');
                }
            } else {
                return redirect()->route('case-study.edit')
                    ->with('no_image', 'Need upload picture, min one picture.');
            }
        }
    }

    public function updateStatus(Request $request) {
        $data = ['productStatus' => $request->status == 'true' ? 1 : 0];
        $update = $this->case->updateStatusProducts($data, $request->id);
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
