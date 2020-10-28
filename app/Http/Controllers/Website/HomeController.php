<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MagazineServices;
use App\Services\CaseStudyServices;
use App\Services\FaqsServices;
use Session;
use Mail;

class HomeController extends Controller
{
    //
    protected $magazine;
    protected $case;
    protected $faq;

    public function __construct() {
        $this->magazine = new MagazineServices();
        $this->case = new CaseStudyServices();
        $this->faq = new FaqsServices();
    }

    public function index() {
        $lang = Session::get('locale');
        $data = $this->magazine->getListNewsInHome(10, 0, $lang);
        foreach ($data as $key => $val) {
            if ($lang == 'jp') {
                $data[$key]->createdAt = date('Y年m月d日', (int)$val->createdAt);
            } else {
                $data[$key]->createdAt = date('Y-m-d', (int)$val->createdAt);
            }
        }
        $duplicate = array_merge($data);
        $breadcrumb['title'] = 'Home';
        return view('Website.content.home', [
            'posts' =>  $duplicate,
            'breadcrumb'   =>  (object)$breadcrumb
        ]);
    }

    public function contact() {
        $class = 'contact__us';
        $breadcrumb['name'] = 'messages.contact_us';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'messages.contact_us';
        return view('Website.content.contact', ['class' => $class, 'breadcrumb' => (object)$breadcrumb]);
    }

    public function sendContact(Request $request) {
        
        $class = 'contact__us';
        $breadcrumb['name'] = 'messages.contact_us';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'messages.contact_us';
        $capcha = strtolower($request->capcha);
        $textcapcha = strtolower($request->textcapcha);
        if ($capcha === $textcapcha) {
            $data = array(
                'contactName'  =>  $request->name,
                'contactEmail'  =>  $request->email,
                'contactSubject'  =>  $request->subject,
                'contactMessage'  =>  $request->message,
                'contactTime'   =>  strtotime(date('Y-m-d'))
            );
            $dataEmail = array(
                'name'  =>  $request->name,
                'email'  =>  $request->email,
                'subject'  =>  $request->subject,
                'content'  =>  $request->message,
            );
            Mail::send('mail_contact', $dataEmail, function($message) use ($request){
                $message->to('contact@hachinet.com', 'Hachinet Inc.')->subject($request->subject);
            });
            $ins = $this->magazine->addContact($data);
            return json_encode(['message' => true]);
        }
        return json_encode(['message' => false]);
    }

    public function faqs() {
        $class = 'faq__question';
        $breadcrumb['name'] = 'FAQ';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'FAQ Questions';
        $lang = Session::get('locale');
        $data = $this->faq->getFaqsFromHome($lang);
        return view('Website.content.faq', ['class' => $class, 'breadcrumb' => (object)$breadcrumb, 'faqs' => $data]);
    }

    public function about_us() {
        $class = 'about__us';
        $breadcrumb['name'] = 'messages.about_us';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'messages.about_us';
        return view('Website.content.about_us', ['class' => $class, 'breadcrumb' => (object)$breadcrumb]);
    }

    public function case_study(Request $request) {
        $class = 'products';
        $breadcrumb['name'] = 'messages.case_study';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'messages.case_study';
        $lang = Session::get('locale');
        $limit = 20;
        $offset = $request->page ? (int)$request->page + (int)$limit : 0;
        $data = $this->case->getListCaseStudy($limit, $offset, $lang);
        foreach ($data as $key => $val) {
            $data[$key]->productImages = explode(',', $val->productImages);
        }
        return view('Website.content.case_study', [
            'class' => $class, 
            'breadcrumb' => (object)$breadcrumb,
            'products'  =>  $data,
        ]);
    }

    public function caseStudyReader($slug) {
        $class = 'products';
        $breadcrumb['name'] = 'messages.case_study';
        $breadcrumb['home'] = 'Home';
        $lang = Session::get('locale');
        $product = $this->case->getDetailsCaseStudy($slug, $lang);
        $breadcrumb['title'] = $product[0]->productTitle;
        foreach ($product as $key => $val) {
            $product[$key]->productImages = explode(',', $val->productImages);
        }
        return view('Website.content.case_study-details', [
            'class' => $class, 
            'breadcrumb' => (object)$breadcrumb,
            'product'   =>  $product[0]
        ]);
    }

    public function services() {
        $class = 'services';
        $breadcrumb['name'] = 'messages.services_providing';
        $breadcrumb['home'] = 'Home';
        $breadcrumb['title'] = 'messages.services_providing';
        return view('Website.content.services', ['class' => $class, 'breadcrumb' => (object)$breadcrumb]);
    }
}
