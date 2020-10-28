<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FaqsServices;


class FaqsController extends Controller
{
    protected $faqs;

    public function __construct() {
        $this->faqs = new FaqsServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $breadcrumb['name'] = 'List FAQs';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List FAQs';
        $breadcrumb['btn_text'] = 'Add new FAQ';
        $breadcrumb['route_name']   = 'faqs.create';
        $limit = 10;
        $offset = $request->page ? (int)$request->page + (int)$limit : 0;
        $data = $this->faqs->getAllFaqs($limit, $offset);

        return view('Admin.content.faq.list', [
            'breadcrumb' => (object)$breadcrumb,
            'faqs'  =>  $data
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
        $breadcrumb['name'] = 'Add new FAQs';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Add new FAQs';
        $breadcrumb['parent'] = 'List FAQs';
        $breadcrumb['parent_name']   = 'faqs.index';
        return view('Admin.content.faq.create', ['breadcrumb' => (object)$breadcrumb]);
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
        ]);
        $postId = date('YmdHis');
        $oneData = [
            'id'    =>  $postId,
            'createdAt' =>  strtotime(date('Y-m-d H:i:s'))
        ];
        $IOne = $this->faqs->addFaqs($oneData);
        if ($IOne) {
            $dataDetails = [
                [
                    'faqsId'    =>  $postId,
                    'faqsTitle' =>  $request->title_jp,
                    'faqsContent'   =>  $request->post_content_jp,
                    'faqsLang'  =>  'jp',
                ],
                [
                    'faqsId'    =>  $postId,
                    'faqsTitle' =>  $request->title_en,
                    'faqsContent'   =>  $request->post_content_en,
                    'faqsLang'  =>  'en',
                ],
                [
                    'faqsId'    =>  $postId,
                    'faqsTitle' =>  $request->title_vn,
                    'faqsContent'   =>  $request->post_content_vn,
                    'faqsLang'  =>  'vn',
                ],
            ];
            $DInsert = $this->faqs->addFaqsDetails($dataDetails);
            if ($DInsert) {
                return redirect()->route('faqs.index')
                ->with('success', 'Add new successfully');
            } else {
                return redirect()->route('faqs.create')
                ->with('error', 'Fail');
            }
        } else {
            return redirect()->route('faqs.create')
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
        $breadcrumb['name'] = 'Edit FAQs';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Edit FAQs';
        $breadcrumb['parent'] = 'List FAQs';
        $breadcrumb['parent_name']   = 'faqs.index';
        $data = $this->faqs->getFaqsById($id);
        $dataJp = array_merge([], array_filter($data, function($val) { return $val->faqsLang == 'jp';}));
        $dataEn = array_merge([], array_filter($data, function($val) { return $val->faqsLang == 'en';}));
        $dataVn = array_merge([], array_filter($data, function($val) { return $val->faqsLang == 'vn';}));
        return view('Admin.content.faq.edit', [
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
        $dataDetails = [
            [
                'faqsId'    =>  $id,
                'faqsTitle' =>  $request->title_jp,
                'faqsContent'   =>  $request->post_content_jp,
                'faqsLang'  =>  'jp',
            ],
            [
                'faqsId'    =>  $id,
                'faqsTitle' =>  $request->title_en,
                'faqsContent'   =>  $request->post_content_en,
                'faqsLang'  =>  'en',
            ],
            [
                'faqsId'    =>  $id,
                'faqsTitle' =>  $request->title_vn,
                'faqsContent'   =>  $request->post_content_vn,
                'faqsLang'  =>  'vn',
            ],
        ];
        $update = $this->faqs->updateFaqs($dataDetails, $id);
        if ($update) {
            return redirect()->route('faqs.index')
            ->with('success', 'Update successfully');
        } else {
            return redirect()->route('faqs.edit', $id)
            ->with('error', 'Fail');
        }
    }

    public function updateStatus(Request $request) {
        $data = ['faqStatus' => $request->status == 'true' ? 1 : 0];
        $update = $this->faqs->updateStatusFaqs($data, $request->id);
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
