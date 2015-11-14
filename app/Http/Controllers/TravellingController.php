<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravellingController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['except' => 'listingAction']);
    }

    public function listingAction() {
        $travels = Travel::all();

        return view('travelling.listing', array('travels' => $travels));
    }

    public function addAction() {
        return view('travelling.add');
    }

    public function payAction($id) {
        $travel = Travel::findOrFail($id);
        return view('travelling.pay', array("travel" => $travel));
    }

    public function store(Request $request) {
        $credentials = $request->all();

        $credentials['user_id'] = Auth::user()->id;
        $credentials['radio'] = (int) $request->input('radio');
        $credentials['airconditioner'] = (int) $request->input('airconditioner');
        $credentials['bags'] = (int) $request->input('bags');

        Travel::create($credentials);
        return redirect()->back();
    }

}
