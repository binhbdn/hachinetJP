<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\HelperServices;
use Illuminate\Support\Facades\DB;
use App\Models\Translate;

class TranslateController extends Controller
{
    protected $help;

    public function __construct() {
        $this->help = new HelperServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $breadcrumb['name'] = 'Translate Language';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Translate Language';
        $data = Translate::orderBy('id', 'ASC')->paginate(10);
        return view('Admin.content.translate', [
            'breadcrumb' => (object)$breadcrumb,
            'data'  =>  $data
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
        request()->validate([
            'keytranslate' => 'required',
            'jp_value' => 'required',
            'en_value' => 'required',
            'vn_value'  =>  'required'
        ]);
        $keyTrans = $this->help->toKeyTrans($request->keytranslate);
        $data = [
            'key_trans' =>  $keyTrans,
            'japan' =>  $request->jp_value,
            'english' =>  $request->en_value,
            'vietnam' =>  $request->vn_value,
        ];
        DB::table('hcn_translate')->where('key_trans', $keyTrans)->delete();
        $ins = DB::table('hcn_translate')->insert($data);
        if ($ins) {
            return redirect()->route('translate.index')
            ->with('success', 'Successfully');
        }
        return redirect()->route('translate.index')
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
        return view('Admin.content.translate');
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

    public function upgrade() {
        
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
