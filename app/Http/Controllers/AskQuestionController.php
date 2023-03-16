<?php

namespace App\Http\Controllers;

use App\Models\AskQuestion;
use Illuminate\Http\Request;

class AskQuestionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);

        $data = $request->all();
        AskQuestion::create($data);
        return back()->with('success', 'Thank you for your feedback.');
    }
}
