<?php namespace App\Http\Controllers;

use App\Group;
use App\User;
use App\Invite;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;

class GroupController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }

    /**
	 * Displays main groups page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.groups.group');
	}


	public function show($slug)
    {
        $group = Group::whereSlug($slug)->first();

        return view('pages.groups.showgroup')->withSlug($group);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('pages.groups.creategroup');
	}

	public function createInviteCode($slug)
	{
	    $group = Group::whereSlug($slug)->first();
	    $code = Invite::generateCode();
	    $invite = $group->invites()->create([
	        'code' => $code,
	        'expires_at' => Carbon::now()->addDays(7) // invite expires in 7 days
	    ]);

	    return redirect()->back();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$name = $request->get('name');
		$slug = str_slug($name, '-');
		$slugCode = Group::createGroupSlug();
		$uniqueSlug = $slug . "-" . $slugCode;
		$group = Group::create([
    	'name' => $name,
    	'slug' => $uniqueSlug
		]);
		auth()->user()->groups()->attach([$group->id]);

		return redirect('/my-groups');
	}

}

