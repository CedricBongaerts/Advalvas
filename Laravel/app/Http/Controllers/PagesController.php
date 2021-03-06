<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function home()
    {
        return view('pages.home');
    }
    
    public function profile()
    {
        return view('pages.profile');
    }

    public function editProfile()
    {
        return view('pages.editprofile');
    }

}
