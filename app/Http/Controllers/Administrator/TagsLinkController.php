<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TagsLinkServices;

class TagsLinkController extends Controller
{
    protected $tags;

    public function __construct() {
        $this->tags = new TagsLinkServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $breadcrumb['name'] = 'List Tags Link';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'List Tags Link';
        $breadcrumb['btn_text'] = 'Add new';
        $breadcrumb['route_name']   = 'tagslink.create';
        $limit = 20;
        $offset = $request->page ? (int)$request->page + (int)$limit : 0;
        $data = $this->tags->getListTags($offset, $limit);
        return view('Admin.content.tags_link.index', [
            'breadcrumb'    =>  (object)$breadcrumb,
            'tags'  =>  $data
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
        $breadcrumb['name'] = 'Add Tags Link';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Add Tags Link';
        $breadcrumb['parent'] = 'List Tags Link';
        $breadcrumb['parent_name']   = 'tagslink.index';
        return view('Admin.content.tags_link.create', [
            'breadcrumb'    =>  (object)$breadcrumb,
        ]);
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
            'tagsJp' => 'required',
            'tagsLink' => 'required',
        ]);
        $data = [
            'keyJp' =>  $request->tagsJp,
            'keyEn' =>  $request->tagsEn,
            'keyVn' =>  $request->tagsVn,
            'tagsLink' =>  $request->tagsLink,
        ];
        $IPost = $this->tags->addNew($data);
        if ($IPost) {
            return redirect()->route('tagslink.index')
                ->with('success', 'Add new successfully');
        } else {
            return redirect()->route('tagslink.create')
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
        $breadcrumb['name'] = 'Edit Tags Link';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'Edit Tags Link';
        $breadcrumb['parent'] = 'List Tags Link';
        $breadcrumb['parent_name']   = 'tagslink.index';
        $data = $this->tags->getTagsById($id);
        return view('Admin.content.tags_link.edit', [
            'breadcrumb'    =>  (object)$breadcrumb,
            'tags'  =>  $data[0]
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
        $data = [
            'keyJp' =>  $request->tagsJp,
            'keyEn' =>  $request->tagsEn,
            'keyVn' =>  $request->tagsVn,
            'tagsLink' =>  $request->tagsLink,
        ];
        $IPost = $this->tags->updateTagsLink($data, $id);
        if ($IPost !== false) {
            return redirect()->route('tagslink.index')
                ->with('success', 'Update successfully');
        } else {
            return redirect()->route('tagslink.edit', $id)
            ->with('error', 'Fail');
        }
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
        $data = ['status'   =>  0];
        $update = $this->tags->updateTagsLink($data, $id);
        if ($update !== false) {
            return redirect()->route('tagslink.index');
        }
        return redirect()->route('tagslink.index');
    }
}
