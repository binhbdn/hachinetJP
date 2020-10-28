<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsLinkServices
{

    public function getListTags($offset, $limit) {
        $partner = DB::select('CALL GetListTags('.$limit.', '.$offset.')');
        return $partner;
    }

    public function addNew($data = array()) {
        $insert = DB::table('hcn_tags_link')->insert($data);
        return $insert;
    }

    public function getTagsById($id) {
        $data = DB::table('hcn_tags_link')->where('status', 1)
        ->where('id', $id)->get();
        return $data;
    }

    public function updateTagsLink($data = array(), $id) {
        $update = DB::table('hcn_tags_link')->where('id', $id)
            ->update($data);
        return $update;
    }
}