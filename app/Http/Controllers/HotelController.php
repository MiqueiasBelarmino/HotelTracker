<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HotelController extends Controller
{
    public function getHotels($lat, $lng)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json'
        ])->get('https://buzzvel-interviews.s3.eu-west-1.amazonaws.com/hotels.json');

        $hotels = [];
        foreach ($response->json()['message'] as $hotel) {
            if (!empty($hotel[1]) && !empty($hotel[2])) {
                if (preg_match('~[0-9]+~', '' . $hotel[1]) ==1) {
                    $dist = $this->distance($lat, $lng, floatval($hotel[1]), floatval($hotel[2]), 'K');
                    $i = 3;
                } else {
                    $dist = $this->distance($lat, $lng, floatval($hotel[2]), floatval($hotel[3]), 'K');
                    $i = 4;
                }
                array_push($hotels, ['name' => $hotel[0], 'distance' => $dist, 'price' => $hotel[$i]]);
            }
        }

        return $hotels;
    }

    function distance($lat1, $lon1, $lat2, $lon2, $unit)
    {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}
