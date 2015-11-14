<?php

namespace App\Http\Controllers;

use App\Travel;

class TravellingController extends Controller {

    public function listingAction() {
        $travels = Travel::all();

        return view('travelling.listing', array('travels' => $travels));
    }

    public function addAction() {
        return view('travelling.add');
    }

}
