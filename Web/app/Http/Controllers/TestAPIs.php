<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestAPIs extends Controller
{
    //
    public function test(Request $request) {
        $api = 'https://api.mapbox.com/geocoding/v5/mapbox.places/South%20Africa/TUT%20North.json?access_token=pk.eyJ1IjoiaGF3a3dhdGNodHJhY2tlciIsImEiOiJja3IxeTg2bDQwZjhhMnVyeGN2Z2E4Zm9hIn0.MTbTHIk6RB1t1lfhAGL-ow';
        $request = Http::get($api);

        // foreach ($request->json() as $key => $value) {
        //     echo '<pre>';
        //     print_r($value);
        // }

        $placeName = $request->json()['features'][0]['place_name'];
        $latlng = $request->json()['features'][0]['center'];
        $lat = $latlng[1];
        $lng = $latlng[0];

        print_r($placeName);
        echo '<br>';
        print_r($latlng);
    }
}
