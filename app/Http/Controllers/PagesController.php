<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {

    public function aboutUsAction() {
        return view('pages.about-us');
    }
    
     public function termsAction() {
        return view('pages.terms');
    }

}
