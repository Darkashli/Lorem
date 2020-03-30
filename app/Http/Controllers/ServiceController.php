<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Service;

class ServiceController extends Controller
{
	public function index()
	{
		$services = Service::orderBy('name', 'desc')->get();

		return view('service.index', compact('services'));
	}

	public function create()
	{
		$service = new Service();

		return view('service.create', compact('service'));
	}

	public function store()
	{
		$service = Service::create($this->validatedData());

		//second way
		// $service = new \App\Service();
		// $service->name = request('name');
		// $service->save();

		return redirect('/services');
	}

	public function show(Service $service)
	{
		return view('service.show', compact('service'));
	}

	public function edit(Service $service)
	{
		return view('service.edit', compact('service'));
	}

	public function update(Service $service)
	{
		$service->update($this->validatedData());
		return redirect('/services');
	}

	public function destroy(Service $service)
	{
		$service->delete();

		return redirect('/services');
	}

	protected function validatedData()
	{
		return request()->validate([
			'name' => 'required',
		]);
	}
}
