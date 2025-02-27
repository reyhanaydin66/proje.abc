<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceduiController extends Controller
{
    public function accordions_collapse()
    {
        return view('pages.advancedui.accordions-collapse');
    }

    public function carousel()
    {
        return view('pages.advancedui.carousel');
    }

    public function draggable_cards()
    {
        return view('pages.advancedui.draggable-cards');
    }

    public function modals_closes()
    {
        return view('pages.advancedui.modals-closes');
    }

    public function navbars()
    {
        return view('pages.advancedui.navbars');
    }
    
    public function offcanvas()
    {
        return view('pages.advancedui.offcanvas');
    }

    public function placeholders()
    {
        return view('pages.advancedui.placeholders');
    } 

    public function ratings()
    {
        return view('pages.advancedui.ratings');
    }

    public function scrollspy()
    {
        return view('pages.advancedui.scrollspy');
    }

    public function swiperjs()
    {
        return view('pages.advancedui.swiperjs');
    }

}
