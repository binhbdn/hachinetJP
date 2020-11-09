<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MagazineServices;
use App\Services\HelperServices;
use Illuminate\Support\Facades\DB;
use Session;

class MagazineController extends Controller
{
    //
    protected $magazine;
    protected $help;

    public function __construct() {
        $this->magazine = new MagazineServices();
        $this->help = new HelperServices();
    }

    public function index(Request $request) {
        $lang = Session::get('locale');
        $limit = 10;
        $topNews = $this->magazine->getTopNews($lang);
        $listId = [];
        foreach ($topNews as $val) {
            $listId[] = (int)$val->postId;
        }
        $totalNews = $this->magazine->countTotalNews($listId);
        $totalPage = (int)$totalNews > (int)$limit ? ceil((int)$totalNews/(int)$limit) : 1;
        $arrPage = [];
        for ($i=0; $i < $totalPage; $i++) { 
        	$arrPage[] = $i + 1;
        }
        $offset = isset($request->page) ? (int)$limit * ((int)$request->page - 1) : 0;
        $data = $this->magazine->getListNews($limit, $offset, $lang, implode(',', $listId));
        foreach ($data as $key => $val) {
            if ($lang == 'jp') {
                $data[$key]->createdAt = date('Y年m月d日', (int)$val->createdAt);
            } else {
                $data[$key]->createdAt = date('Y-m-d', (int)$val->createdAt);
            }
        }
    	foreach ($topNews as $k => $v) {
    		if ($lang == 'jp') {
    			$topNews[$k]->createdAt = date('Y年m月d日', (int)$v->createdAt);
    		} else {
    			$topNews[$k]->createdAt = date('Y-m-d', (int)$v->createdAt);
    		}
        }
        $dataTags = $this->magazine->getTagsLink($lang);
        foreach ($data as $key => $val) {
            if ($lang == 'jp') {
                $data[$key]->createdAt = date('Y年m月d日', (int)$val->createdAt);
            } else {
                $data[$key]->createdAt = date('Y-m-d', (int)$val->createdAt);
            }
            foreach ($dataTags as $tags) {
                if ($tags->keyTags) {
                    $data[$key]->postContent = $this->help->updateTagsLink($tags->keyTags, $tags->tagsLink, $data[$key]->postContent);
                }
            }
        }
        for ($i = 0; $i < 12; $i++) {
            $date[] = array(
                'date'  =>  date("F Y", strtotime("-".$i." month")),
                'unix'  =>  strtotime(date("Y-m-01", strtotime("-".$i." month")))
            );
        }
        $duplicate = array_merge($data);
        // dd($duplicate);
        return view('Magazine.content.home', [
            'top' => $topNews,
            'posts' =>  $duplicate,
            'date'  =>  $date,
            'arrPage'	=>	$arrPage
        ]);
    }

    public function show(Request $request, $slug) {
        $lang = Session::get('locale');
        if (isset($request->s) && $slug == 'search') {
            $text = $request->s;
            $data = $this->magazine->searchPosts($text, $lang);
            foreach ($data as $key => $val) {
                if ($lang == 'jp') {
                    $data[$key]->createdAt = date('Y年m月d日', (int)$val->createdAt);
                } else {
                    $data[$key]->createdAt = date('Y-m-d', (int)$val->createdAt);
                }
            }
            return view('Magazine.content.search', [
                'text_search'  =>  $request->s,
                'title_search'  =>  'Search',
                'posts' =>  $data
            ]);
            return true;
        }
        $data = $this->magazine->getPostDetails($slug, $lang);
    	if (count($data) == 0) {
    		$data = $this->magazine->getPostDetailsOld($slug, $lang);
            if (count($data) == 0) {
                return redirect()->route('home');
            }
            return redirect()->route('magazine.show', $data[0]->postSlug);
    	}
        $dataTags = $this->magazine->getTagsLink($lang);
        foreach ($data as $key => $val) {
            if ($lang == 'jp') {
                $data[$key]->createdAt = date('Y年m月d日', (int)$val->createdAt);
            } else {
                $data[$key]->createdAt = date('Y-m-d', (int)$val->createdAt);
            }
            foreach ($dataTags as $tags) {
                if ($tags->keyTags) {
                    $data[$key]->postContent = $this->help->updateTagsLink($tags->keyTags, $tags->tagsLink, $data[$key]->postContent);
                }
            }
        }
        $topNews = $this->magazine->getTopNews($lang);
        foreach ($topNews as $k => $v) {
    		if ($lang == 'jp') {
    			$topNews[$k]->createdAt = date('Y年m月d日', (int)$v->createdAt);
    		} else {
    			$topNews[$k]->createdAt = date('Y-m-d', (int)$v->createdAt);
    		}
        }
        for ($i = 0; $i < 12; $i++) {
            $date[] = array(
                'date'  =>  date("F Y", strtotime("-".$i." month")),
                'unix'  =>  strtotime(date("Y-m-01", strtotime("-".$i." month")))
            );
        }
        return view('Magazine.content.details', [
            'posts' =>  $data[0],
            'date'  =>  $date,
            'top' => $topNews
            
        ]);
    }

    public function archive($year, $month) {
        $lang = Session::get('locale');
        $date = $year.'-'.$month.'-01';
        $dateFrom = strtotime($date);
        $dateTo = strtotime(date('Y-m-d', strtotime($date.' +1 month')));
        $data = $this->magazine->getPostArchive($dateFrom, $dateTo, $lang);
        foreach ($data as $key => $val) {
            if ($lang == 'jp') {
                $data[$key]->createdAt = date('Y年m月d日', (int)$val->createdAt);
            } else {
                $data[$key]->createdAt = date('Y-m-d', (int)$val->createdAt);
            }
        }
        $arrDate = [];
        for ($i = 0; $i < 12; $i++) {
            $arrDate[] = array(
                'date'  =>  date("F Y", strtotime("-".$i." month")),
                'unix'  =>  strtotime(date("Y-m-01", strtotime("-".$i." month")))
            );
        }
        return view('Magazine.content.archive', [
            'date_archive'  =>  date('F Y', strtotime($date)),
            'posts' =>  $data,
            'date'  =>  $arrDate
        ]);
    }

    public function newsletter(Request $request) {
        $data = [
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'createdAt' =>  strtotime(date('Y-m-d H:i:s'))
        ];
        $ins = DB::table('hcn_newsletter')->insert($data);
        echo $ins;
    }
}
