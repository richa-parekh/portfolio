<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(ContactRequest $request)
    {
        ContactMessage::create($request->validated());

        return back()->with(
            'success',
            'Thank you! Your message has been sent.'
        );
    }
}
