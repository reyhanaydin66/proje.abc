<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function full_calendar()
    {
        return view('pages.apps.full-calendar');
    }

    public function gallery()
    {
        return view('pages.apps.gallery');
    }

    public function sweet_alerts()
    {
        return view('pages.apps.sweet-alerts');
    }

}
