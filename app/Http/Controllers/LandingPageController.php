<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * show landing page
     */
    public function showLandingPage(){
        return view('landing');
    }
}
