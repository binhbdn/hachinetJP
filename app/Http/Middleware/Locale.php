<?php

namespace App\Http\Middleware;

use Closure;
use Lang;
use Session;

class Locale
{
	public function handle($request, Closure $next)
	{
		$ext = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
		$locale = $ext == 'jp' ? 'jp' : 'en';
		if (!Session::has('locale')) {
			//Session::put('locale', config('app.locale'));
			Session::put('locale', $locale);
		}

		Lang::setLocale(Session::get('locale'));

		return $next($request);
	}

    private function detectLocate()
    {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $json     = file_get_contents("http://www.geoplugin.net/php.gp?ip=$ipaddress");
        $json     = unserialize($json);
        return strtolower($json['geoplugin_countryCode']);
    }
}