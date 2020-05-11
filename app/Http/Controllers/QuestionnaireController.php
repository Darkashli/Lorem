<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Questionnaire::orderBy('title', 'desc')->get();
    }

    public function create()
    {
        return view('questionnaire.create');
    }

    public function store()
    {
        $questionnaire = auth()->user()->questionnaires()->create($this->validatedData());

        return redirect('/questionnaires/' . $questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers.responses');

        return view('questionnaire.show', compact('questionnaire'));
    }

    public function destroy(Questionnaire $questionnaire, Question $question)
    {
        $question->answers()->delete();
        $questionnaire->questions()->delete();
        $questionnaire->delete();

        return redirect('/');
    }

    protected function validatedData()
    {
        return request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);
    }
}
