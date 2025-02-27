<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public function avatars()
    {
        return view('pages.utilities.avatars');
    }

    public function borders()
    {
        return view('pages.utilities.borders');
    }

    public function breakpoints()
    {
        return view('pages.utilities.breakpoints');
    }

    public function colors()
    {
        return view('pages.utilities.colors');
    }

    public function columns()
    {
        return view('pages.utilities.columns');
    }

    public function flex()
    {
        return view('pages.utilities.flex');
    }

    public function gutters()
    {
        return view('pages.utilities.gutters');
    }

    public function helpers()
    {
        return view('pages.utilities.helpers');
    }

    public function positions()
    {
        return view('pages.utilities.positions');
    }

    public function more()
    {
        return view('pages.utilities.more');
    }

}
