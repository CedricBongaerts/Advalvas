<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticPagesController extends Controller {

    public function home()
    {
        return view('pages.static.home');
    }
}
