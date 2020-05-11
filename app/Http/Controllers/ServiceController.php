<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

	public function index()
	{
		$services = Service::orderBy('service', 'desc')->get();

		return view('service.index', compact('services'));
	}

	public function create()
	{
		return view('service.create');
	}

	public function store()
	{
		$service = Service::create($this->validatedData());

		return redirect('/services');
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
			'service' => 'required',
		]);
	}
}
