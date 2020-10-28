<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactServices
{

    public function getListContact() {
        $data = DB::table('hcn_contact')->orderBy('id', 'DESC')->get();
        return $data;
    }
}