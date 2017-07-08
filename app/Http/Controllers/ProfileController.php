<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{

	
    public function show(){
		return view('profile.show');
	}

	public function store(ProfileRequest $request) {
		dd('ok');
	}
}
