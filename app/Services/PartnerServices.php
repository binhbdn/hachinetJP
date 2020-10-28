<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerServices
{

    public function getListPartner($page = 10) {
        $partner = DB::table('hcn_partner')->where('partnerStatus', 1)->orderBy('id')->paginate($page);
        return $partner;
    }

    public function getPartnerById($id) {
        $partner = DB::table('hcn_partner')->where('partnerStatus', 1)->where('id', $id)->first();
        return $partner;
    }

    public function addNewPartner($data = array()) {
        $insert = DB::table('hcn_partner')->insert([
            $data
        ]);
        return $insert;
    }

    public function updatePartner($data = array(), $id) {
        $update = DB::table('hcn_partner')->where('id', $id)
            ->update($data);
        return $update;
    }

}