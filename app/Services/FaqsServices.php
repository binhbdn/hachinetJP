<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqsServices
{
    public function getAllFaqs($limit, $offset) {
        $faqs = DB::select('CALL GetAllFaqs('.$limit.', '.$offset.')');
        return $faqs;
    }

    public function addFaqs($data = array()) {
        $insert = DB::table('hcn_faqs')->insert($data);
        return $insert;
    }

    public function addFaqsDetails($data = array()) {
        $insert = DB::table('hcn_faqs_details')->insert($data);
        return $insert;
    }

    public function updateFaqs($data = array(), $id) {
        DB::table('hcn_faqs_details')->where('faqsId', $id)->delete();
        $insert = DB::table('hcn_faqs_details')->insert($data);
        return $insert;
    }

    public function updateStatusFaqs($data = array(), $id) {
        $update = DB::table('hcn_faqs')->where('id', $id)
            ->update($data);
        return $update;
    }

    public function getFaqsById($id) {
        $faqs = DB::select('CALL GetFaqsById("'.$id.'")');
        return $faqs;
    }

    public function getFaqsFromHome($lang) {
        $faqs = DB::select('CALL GetFaqsWithLang("'.$lang.'")');
        return $faqs;
    }
}