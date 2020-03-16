<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
    	$customers = \App\Customer::all();

    	return view('customer.index', compact('customers'));
    }

    public function create()
    {
    	return view('customer.create');
    }

    public function store()
    {
    	$data = request()->validate([
    		'name' => 'required | min:4 | max:10',
    		'email' => 'required | email:rfc,dns' 
    	]);

    	\App\Customer::create($data);
    	return redirect('/customers');
    }
}
