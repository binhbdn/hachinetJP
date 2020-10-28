<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\PartnerServices;
use App\Services\HelperServices;
use App\Services\UploadServices;


class PartnerController extends Controller
{

    protected $helper;
    protected $upload;
    protected $partner;

    public function __construct() {
        $this->helper = new HelperServices();
        $this->upload = new UploadServices();
        $this->partner = new PartnerServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $breadcrumb['name'] = 'List Partner';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Partner';
        $breadcrumb['btn_text'] = 'Add new Partner';
        $breadcrumb['route_name']   = 'partner.create';
        $page = $request->page ? $request->page : 10;
        $data = $this->partner->getListPartner($page);
        return view('Admin.content.partner.list', [
            'breadcrumb' => (object)$breadcrumb,
            'partnerList'  =>  $data,
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
        $breadcrumb['name'] = 'New Partner';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'New Partner';
        $breadcrumb['parent']   = 'List Partner';
        $breadcrumb['parent_name']   = 'partner.index';
        return view('Admin.content.partner.create', ['breadcrumb' => (object)$breadcrumb]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $breadcrumb['name'] = 'List Partner';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Partner';
        $breadcrumb['btn_text'] = 'Add new Partner';
        $breadcrumb['route_name']   = 'partner.create';
        //
        request()->validate([
            'partnerName' => 'required',
            'partnerUrl' => 'required|url',
            'partnerPiority'    =>  'required|numeric|min:0|max:10'
        ]);
        $imageData = $request->textFile;
        $_fileName = $this->helper->toSlug($request->partnerName);
        
        $file = $request->textFile ? $this->upload->uploadFile($_fileName, $imageData) : '';
        $data = [
            'partnerName'   =>  $request->partnerName,
            'partnerUrl'    =>  $request->partnerUrl,
            'partnerPiority'    =>  $request->partnerPiority,
            'partnerImage'  =>  $file
        ];

        $insert = $this->partner->addNewPartner($data);

        if ($insert) {
            return redirect()->route('partner.index')
            ->with('breadcrumb', (object)$breadcrumb)
            ->with('success', 'Add new successfully');
        }
        return redirect()->route('partner.create')
        ->with('breadcrumb', (object)$breadcrumb)
        ->with('error', 'Fail');
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
        return redirect()->route('partner.index');
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
        $breadcrumb['name'] = 'Edit Partner';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Edit Partner';
        $breadcrumb['parent']   = 'List Partner';
        $breadcrumb['parent_name']   = 'partner.index';
        $data = $this->partner->getPartnerById($id);
        return view('Admin.content.partner.edit', [
            'breadcrumb' => (object)$breadcrumb,
            'partner'   =>  $data
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
        $breadcrumb['name'] = 'List Partner';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Partner';
        $breadcrumb['btn_text'] = 'Add new Partner';
        $breadcrumb['route_name']   = 'partner.create';
        //
        request()->validate([
            'partnerPiority'    =>  'numeric|min:0|max:10'
        ]);
        $imageData = $request->textFile;
        $_fileName = $this->helper->toSlug($request->partnerName);
        
        $file = $request->textFile ? $this->upload->uploadFile($_fileName, $imageData) : '';
        
        if ($request->partnerName) {
            $data['partnerName'] = $request->partnerName;
        }
        if ($request->partnerUrl) {
            $data['partnerUrl'] = $request->partnerUrl;
        }
        if ($request->partnerPiority) {
            $data['partnerPiority'] = $request->partnerPiority;
        }
        if ($request->textFile) {
            $data['partnerImage'] = $file;
        }
        $update = $this->partner->updatePartner($data, $id);
        if ($update !== false) {
            return redirect()->route('partner.index')
            ->with('breadcrumb', (object)$breadcrumb)
            ->with('success', 'Update new successfully');
        }
        return redirect()->route('partner.edit')
        ->with('breadcrumb', (object)$breadcrumb)
        ->with('error', 'Fail');
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
        $data = ['partnerStatus'   =>  0];
        $update = $this->partner->updatePartner($data, $id);
        if ($update !== false) {
            return redirect()->route('partner.index');
        }
        return redirect()->route('partner.index');
    }
}
