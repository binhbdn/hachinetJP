<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProfileComposer
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
        $settings = DB::table('settings')->select('*')->get();
        // echo json_encode($categories['id']);
        // echo json_encode($categories);
        if (count($settings) == 0) {
            $settings = (object)[
                'logo' => '',
                'logoheader' => '',
                'logofooter' => '',
                'favicon' => '',
                'seo_title' => '',
                'seo_keyword' => '',
                'seo_description' => '',
                'company_contact' => '',
                'company_address' => '',
                'company_phone' => '',
                'from_name' => '',
                'from_email' => '',
                'facebook' => '',
                'intragam' => '',
                'twitter' => '',
                'google' => '',
                'copyright_text' => '',
                'google_analytics' => '',
            ];
        }
        else
        {
           $settings = $settings[0];
        }
        $view->with('settings', $settings);
    }
}