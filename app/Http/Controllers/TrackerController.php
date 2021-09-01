<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackerController extends Controller
{
    public function list()
    {
        return view('tracker.list');
    }
}
