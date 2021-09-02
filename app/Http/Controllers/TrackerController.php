<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackerController extends Controller
{
    public function list()
    {
        return view('tracker.list');
    }

    public function search()
    {
        return view('tracker.search');
    }

    public function searchSubmit(Request $request)
    {
        if (!empty($request->location)) {
            $response = Http::withHeaders([
                'Accept' => 'application/json'
            ])->post(env('MQ_URL') . env('MQ_KEY') . '&location', [
                'location' => $request->location
            ]);

            $location = $response->object()->results[0]->locations[0];
            if (!empty($location->adminArea1) || !empty($location->adminArea3) || !empty($location->adminArea5)) {
                $hotels = (new HotelController)->getHotels($location->latLng->lat,$location->latLng->lng);
                $hotels = array_slice($hotels, 0, 10);
                return view('tracker.list',compact('hotels'));
            } else {
                return redirect()->back()->with(['error' => 'Failed to track specified location!']);
            }
        }

        return redirect()->back()->with(['error' => 'Type a valid location!']);
    }
}
