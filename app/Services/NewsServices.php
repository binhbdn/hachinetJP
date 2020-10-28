<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsServices
{
    public function getListNews($offset, $limit) {
        $partner = DB::select('CALL GetAllPosts('.$offset.', '.$limit.')');
        return $partner;
    }

    public function updateStatusNews($data = array(), $id) {
        $update = DB::table('hcn_post')->where('id', $id)->update($data);
        return $update;
    }

    public function addNew($data = array()) {
        $insert = DB::table('hcn_post')->insert($data);
        return $insert;
    }

    public function addNewDetails($data = array()) {
        $insert = DB::table('hcn_post_details')->insert($data);
        return $insert;
    }

    public function getNewsById($id) {
        $data = DB::select('CALL GetPostById('.$id.')');
        return $data;
    }

    public function updateNews($data = array(), $id) {
        $update = DB::table('hcn_post')->where('id', $id)
            ->update($data);
        return $update;
    }

    public function updateNewsDetails($data = array(), $id) {
        DB::table('hcn_post_details')->where('postId', $id)->delete();
        $insert = DB::table('hcn_post_details')->insert($data);
        return $insert;
    }

    public function countTotalNews() {
        $partner = DB::table('hcn_post')->get()->count();
        return $partner;
    }

}