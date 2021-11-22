<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationFormController extends Controller
{
    public function createForm(Request $request) {
        return view('application');
    }

    public function ApplicationForm(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'category' => 'required',
            'portfolio_link' => 'required',
            'portfolio_link_confirmed' => '',
            'online_store' => 'required',
            'online_stores' => '',
            'answer_quality' => 'required',
            'answer_experience' => 'required',
            'answer_understanding' => 'required',
        ]);

        Application::create($request->all());

        return back()->with('success', 'Thank you!');
    }
}
