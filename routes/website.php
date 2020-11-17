<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'localization', 'namespace' => 'Website', 'prefix' => Session::get('locale')], function() {

    Route::get('language/{language}', 'LangController@getlang');
    
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::post('/contact', 'HomeController@sendContact')->name('send_contact');
    Route::get('/faq', 'HomeController@faqs')->name('faq');
    Route::get('/about-us', 'HomeController@about_us')->name('about_us');
    Route::get('/case-study', 'HomeController@case_study')->name('case_study');
    Route::get('/case-study/{slug}', 'HomeController@caseStudyReader')->name('case_study_read');
    Route::get('/services', 'HomeController@services')->name('services');
    Route::get('/blogs', 'MagazineController@index')->name('news');

    Route::get('blogs/ky-su-cau-noi-nhat-ban-la-gi-', function() {
        return redirect('/blogs/what-is-the-japanese-bridge-system-engineer');
    });

    Route::get('blogs/tam-dung-to-chuc-su-kien-tuan-le-it-mua-xua-n-nhat-ban-lan-thu-29', function() {
        return redirect('/blogs/announcement-29th-japan-it-spring-week-2020-event-is-temporarily-suspended');
    });

    Route::get('/term-of-use', 'HomeController@term_of_use');

    Route::get('/blogs/{post}', 'MagazineController@show')->name('magazine.show');
    Route::get('/blogs/{year}/{month}', 'MagazineController@archive')->name('magazine.archive');
    Route::post('newsletter', 'MagazineController@newsletter')->name('magazine.newsletter');
    
    Route::get('/landing/{any}', 'LandingPageController@index')->name('landing');

    Route::get('outsourcing-angular-development', function() {
        if (Session::get('locale') == 'jp') {
            return view('Website.landing.jp-angular', ['cobol' => false]);
        }
        return view('Website.landing.en-angular', ['cobol' => false]);
    })->name('outsource_development');
    Route::get('smartphone-application-development', function() {
        if (Session::get('locale') == 'jp') {
		$cobol['title'] = 'モバイル開発・モバイルウトソーーシング';
		$cobol['description'] = 'お客様の業務内容を理解する上で、企画・発案～設計・開発～運用・マーケット申請・保守・管理といった一連のアプリ開発を提供いたします。';
		$cobol['keywords'] = 'モバイルアウトソーシング, モバイルオフショア開発, モバイル開発、IOS開発, ラボ型開発, Android開発プロセス, ReactNative, ReactJS, Xamarin, Titanium, Phonegap, Meteor,Unity,Cocos2dx';
            return view('Website.landing.jp-mobile', ['cobol' => $cobol]);
        }
        return view('Website.landing.en-mobile', ['cobol' => false]);
    })->name('mobile_app_development');

    Route::get('website-development', function() {
        return view('Website.landing.website-development', ['cobol' => false]);
    });

    // route direct from old site

    Route::get('/news', function() {
        return redirect()->route('news');
    });
    Route::get('/news/view/{id}/{title}', function() {
        return redirect()->route('news');
    });


    
    Route::get('java-systems-development', function() {
        if (Session::get('locale') == 'jp') {
		$cobol['title'] = 'JAVAシステム開発・ジャワアウトソーーシング';
		$cobol['description'] = 'ベトナムオフショア開発は「コスト」から「人材確保」の時代へ。日本人エンジニアによる上流工程支援とベトナム人リソースでインソーシング志向アウトソーシングによるIT戦略実行力を支援！';
		$cobol['keywords'] = 'ベトナムアウトソーシング, ベトナムオフショア開発, モバイル開発、ウェブ開発, ラボ型開発, オフショア開発プロセス, 高い品質, 日本品質, ライフタイム保証, システムの開発, アプリ開発, モバイル開発, ソフトウェアを開発しています, アプリケーション開発を提供いたします,';
            return view('Website.landing.jp-java', ['cobol' => $cobol]);
        }
        return view('Website.landing.en-java', ['cobol' => false]);
    })->name('java_system_dev');
    
    Route::get('net-systems-development', function() {
        if (Session::get('locale') == 'jp') {
		$cobol['title'] = '.NETシステム開発・NetCoreアウトソーーシング';
		$cobol['description'] = 'ベトナムオフショア開発は「コスト」から「人材確保」の時代へ。日本人エンジニアによる上流工程支援とベトナム人リソースでインソーシング志向アウトソーシングによるIT戦略実行力を支援！';
		$cobol['keywords'] = 'ベトナムアウトソーシング, ベトナムオフショア開発, Netcore開発, ASP開発, VB.NETオフショア開発, VB6開発, MVC .NET開発, Visual Basicシステムの開発, カスタマイズ.NETの開発,アプリケーションの開発';
            return view('Website.landing.jp-net', ['cobol' => $cobol]);
        }
        return view('Website.landing.en-net', ['cobol' => false]);
    })->name('net_system_dev');


    Route::get('cobol-systems-development', function() {
        if (Session::get('locale') == 'jp') {
        	$cobol['title'] = 'Cobolシステム開発 - COBOLアウトソーーシング';
        	$cobol['description'] = 'Hachinetはベトナムで、COBOLシステムや製品などの開発を専用する会社です。';
        	$cobol['keywords'] = 'COBOLアウトソーシング, COBOLオフショア開発, COBOL開発、ウェブ開発, ラボ型開発, オフショア開発プロセス, 高い品質, 日本品質, ライフタイム保証, COBOLシステムの開発, COBOL ソフトウェアを開発しています, ファイナンス開発を提供いたします';
            return view('Website.landing.jp-cobol', ['cobol' => $cobol]);
        }
        return view('Website.landing.en-cobol', ['cobol' => false]);
    })->name('cobol_system_dev');

    Route::get('service-of-human-resources', function() {
        if (Session::get('locale') == 'jp') {
            $cobol['title'] = 'みなさまから信頼される 「総合人材サービス」';
            $cobol['description'] = '人材派遣だけでなく、人材に関わるトータルソリューションをワン・ストップでご提供します。 日本全国の主要都市にネットワークを持ち、全国展開を図る企業にも対応します。また、今日ではアジアなどを中心に、日本企業の人材戦略をサポートする体制も整えています。';
            $cobol['keywords'] = '日本全国の主要都市にネットワークを持ち、,全国展開を図る企業にも対応します。また、,今日ではアジアなどを中心に、,日本企業の人材戦略をサポートする体制も整えています。';
            return view('Website.landing.haken', ['cobol' => $cobol]);
        }
        return view('Website.landing.haken', ['cobol' => false]);
    })->name('haken');
    Route::get('design-web-mobile-app', 'HomeController@design_web_mobile_app');
    Route::get('online-seminar-vi', function() {
        return view('Website.online-seminar.vn-online-seminar');
    });
    Route::get('online-seminar-en', function() {
        return view('Website.online-seminar.en-online-seminar');
    });
    Route::get('online-seminar-jp', function() {
        return view('Website.online-seminar.jp-online-seminar');
    });
    Route::post('online-seminar', 'LandingPageController@sendmail');
    Route::post('online-seminar-success', 'LandingPageController@sendmailsuccess');
});


