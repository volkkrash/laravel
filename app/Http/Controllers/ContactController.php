<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactForm;

class ContactController extends Controller
{
    //
    public function index(Request $request) {
        return view('contact.index');
    }

    public function store(ContactFormRequest $request) {

        ContactForm::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
} 
        
    
