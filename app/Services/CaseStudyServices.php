<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseStudyServices
{
    public function getListProducts($offset, $limit) {
        $partner = DB::select('CALL GetAllProducts('.$limit.', '.$offset.')');
        return $partner;
    }

    public function addProducts($data = array()) {
        $insert = DB::table('hcn_products')->insert($data);
        return $insert;
    }

    public function addProductsDetails($data = array()) {
        $insert = DB::table('hcn_products_details')->insert($data);
        return $insert;
    }


    public function getProductById($id) {
        $data = DB::select('CALL GetProductById('.$id.')');
        return $data;
    }

    public function updateProducts($data = array(), $id) {
        $update = DB::table('hcn_products')->where('id', $id)
            ->update($data);
        return $update;
    }

    public function updateProductsDetails($data = array(), $id) {
        DB::table('hcn_products_details')->where('productId', $id)->delete();
        $insert = DB::table('hcn_products_details')->insert($data);
        return $insert;
    }

    public function updateStatusProducts($data = array(), $id) {
        $update = DB::table('hcn_products')->where('id', $id)
            ->update($data);
        return $update;
    }

    public function getListCaseStudy($limit, $offset, $lang) {
        $data = DB::select('CALL GetListCaseStudy('.$limit.', '.$offset.', "'.$lang.'")');
        return $data;
    }

    public function getDetailsCaseStudy($slug, $lang) {
        $data = DB::select('CALL GetDetailsProducts("'.$slug.'", "'.$lang.'")');
        return $data;
    }

    public function countTotal() {
        $partner = DB::table('hcn_products')->get()->count();
        return $partner;
    }

}