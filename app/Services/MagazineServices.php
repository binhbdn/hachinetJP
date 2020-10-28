<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MagazineServices
{
    
    public function getListNewsInHome($limit, $offset, $lang) {
        $data = DB::select('CALL GetPostWithLangInHome('.$limit.', '.$offset.', "'.$lang.'")');
        return $data;
    }

    public function getListNews($limit, $offset, $lang, $listId = null) {
        $data = DB::select('CALL GetPostWithLang('.$limit.', '.$offset.', "'.$lang.'", "'.$listId.'")');
        return $data;
    }

    public function getTopNews($lang) {
        $data = DB::select('CALL GetTopNews("'.$lang.'")');
        return $data;
    }

    public function getPostDetails($slug, $lang) {
        $data = DB::select('CALL GetDetailsPost("'.$slug.'", "'.$lang.'")');
        return $data;
    }

    public function getPostDetailsOld($slug, $lang) {
        $data = DB::select('CALL GetDetailsPostOld("'.$slug.'", "'.$lang.'")');
	return $data;
    }

    public function getPostArchive($dateFrom, $dateTo, $lang) {
        $data = DB::select('CALL GetPostFromTo('.$dateFrom.', '.$dateTo.', "'.$lang.'")');
        return $data;
    }

    public function getTagsLink($lang) {
        $data = DB::select('CALL GetTagsLink("'.$lang.'")');
        return $data;
    }

    public function searchPosts($text, $lang) {
        $data = DB::select('CALL SearchPosts("'.$text.'", "'.$lang.'")');
        return $data;
    }

    public function countTotalNews($listId) {
        $partner = DB::table('hcn_post')->where('postStatus', 1)
        ->whereNotIn('id', $listId)->get()->count();
        return $partner;
    }

    public function addContact($data) {
        $insert = DB::table('hcn_contact')->insert($data);
        return $insert;
    }
}
