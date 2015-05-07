<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller; 
use Illuminate\Http\Request;
use App\Hotel;


class DashboardController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index()
	{
		$hotel = Hotel::get();

		return view('backend.dashboard', compact('hotel'));
	}

	public function edit($id)
	{
	
		$hotel = Hotel::where('id', $id)->first();
	
		return view('backend.edit', compact('hotel'));
	}

	public function update($id, Request $request) {

		$hotel = Hotel::where('id', $id)->first();

		$hotel->title = $request->get('title');

		$hotel->save();

		return redirect();

	}
}