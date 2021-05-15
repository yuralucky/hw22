<?php

namespace App\Http\Controllers;

use App\Models\CountryShop;
use App\Service\Geo\GeoService;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;


class GeoIpController extends Controller
{
    public function index(GeoService $geoService)
    {
        return 'Yes';
        $ip = \request()->server->get('HTTP_X_FORWARDED_FOR');

        $geoService->parse($ip);
        $continentCode = $this->shop($geoService->continentCode());
        return redirect($continentCode->shop);
    }

    private function shop($continentCode)
    {
        return CountryShop::where('code', $continentCode)->firstOrFail();
    }
}
