<?php


namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LangController extends Controller
{
      public function postLang(Request $request)
      {
          Session::put('locale', $request->locale);
          return redirect()->back();
      }

      public function getlang($locale)
      {
          Session::put('locale', $locale);
          return redirect()->back();
      }
}
