<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Session;

class ViewComposer
{
    /**
     * The user repository implementation.
     *
     * @var  UserRepository
     */
    protected $settings;

    /**
     * Create a new profile composer.
     *
     * @param    UserRepository  $users
     * @return  void
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param    View  $view
     * @return  void
     */
    public function compose(View $view)
    {
        $settings = null;
        $lang = Session::get('locale');
        $settings = DB::table('hcn_settings')->select('*')->where('lang', $lang)->get();
        if (count($settings) == 0) {
            $settings = (object)[
                'logoheader' => '',
                'logofooter' => '',
                'title' => 'HACHINET JSC',
                'keywords' => '',
                'description' => '',
                'type' => 'website',
                'locale' => 'en_US',
                'image' => '',
                'facebook' => 'https://www.facebook.com/hachinet.jsc/',
                'twitter' => 'https://twitter.com/hachinetvietnam',
                'instagram' => 'https://www.instagram.com/hachinet.software/',
                'linkedin' => '',
                'youtube' => 'https://www.youtube.com/channel/UCmIQuop1hhz5dpSCEKKacCw',
            ];
        }
        else
        {
           $settings = $settings[0];
        }
        $view->with('settings', $settings);
    }
}