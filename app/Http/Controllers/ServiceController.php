<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
	{
		$services = \App\Service::orderBy('name', 'desc')->get();

		return view('service.index', compact('services'));
	}

	public function store()
	{
		$data = request()->validate([
			'name' => 'required | min:5 | max:10'
		]);

		//first way
		\App\Service::create($data);
		
		//second way		
		// $service = new \App\Service();
		// $service->name = request('name');
		// $service->save();

		return redirect()->back();
	}
}
