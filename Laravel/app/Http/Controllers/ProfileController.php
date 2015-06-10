<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller {

	public function show() {
		$user = Auth::user();

        return view('pages.editprofile')->withUser($user);
    }

}
