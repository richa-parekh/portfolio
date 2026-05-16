<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'project_type' => 'required',
            'message' => 'required|min:10'
        ]);

        ContactMessage::create($validated);

        return back()->with(
            'success',
            'Message sent successfully!'
        );
    }
}
