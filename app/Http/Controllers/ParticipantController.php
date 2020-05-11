<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function index(Request $request)
    {
        $participants = Participant::where('active', $request->query('active', 1))->get();

        return view('participant.index', compact('participants'));
    }

    public function create()
    {
        $participant = new Participant();

        return view('participant.create', compact('participant'));
    }

    public function store()
    {
        $participant = Participant::create($this->validatedData());

        Mail::to($participant->email)->send(new Email());

        return redirect('/participants/' . $participant->id);
    }

    public function show(Participant $participant)
    {
        // Both of these ways can be used!
        // $customer = \App\Customer::findOrFail($customerId);

        return view('participant.show', compact('participant'));
    }

    public function edit(Participant $participant)
    {
        return view('participant.edit', compact('participant'));
    }

    public function update(Participant $participant)
    {

        $participant->update($this->validatedData());

        return redirect('/participants/' . $participant->id);
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();

        return redirect('/participants');
    }

    protected function validatedData()
    {
        return request()->validate([
            'name' => 'required | min:4 | max:20',
            'email' => 'required | email:rfc,dns',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'postal_code:NL,DE,FR,BE',
        ]);
    }
}
