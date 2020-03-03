<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		return view('dashboard');  	
	}
 
	public function notification()
	{
		$messages = Message::all;
		return view('subviews.notifications', compact('messages'));
	}

	public function service()
	{
		$services = \App\Service::all();
		return view('services', compact('services'));
	}
}
