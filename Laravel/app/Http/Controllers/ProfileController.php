<?php namespace App\Http\Controllers;

use Auth;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('pages.profile.profile')->withUser($user);
    }

    public function show($username)
    {
        $user = User::whereUsername($username)->first();

        return view('pages.profile.showprofile')->withUser($user);
    }

	public function edit() 
	{
		$user = Auth::user();

        return view('pages.profile.editprofile')->withUser($user);
    }

    public function update($username, Request $request) 
    {
        $user = User::whereUsername($username)->first();

        $user->city = $request->get('city');
        $user->country = $request->get('country');
        $user->phone = $request->get('phone');
        $user->twitter = $request->get('twitter');
        $user->facebook = $request->get('facebook');

        $user->save();

    	return redirect('/profile');
    }


}
