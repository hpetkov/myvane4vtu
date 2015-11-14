<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravellingController extends Controller {

    public function listingAction() {
        $travels = Travel::all();

        return view('travelling.listing', array('travels' => $travels));
    }

    public function addAction() {
        return view('travelling.add');
    }

    public function store(Request $request)
    {
    	$credentials = $request->all();

        $credentials['user_id'] = Auth::user()->id;
    	$credentials['radio'] = (int)$request->input('radio');
    	$credentials['airconditioner'] = (int)$request->input('airconditioner');
    	$credentials['bags'] = (int)$request->input('bags');

    	Travel::create($credentials);

    	dd('dasdas');
    	return redirect()->back();
    }

}
