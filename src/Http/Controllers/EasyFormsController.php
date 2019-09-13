<?php

namespace Faridibin\EasyForms\Http\Controllers;

use Faridibin\EasyForms\Http\Requests\ContactRequest;
use Faridibin\EasyForms\Mail\ContactMailable;
use Faridibin\EasyForms\Models\Contact;
use Illuminate\Support\Facades\Mail;

class EasyFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('easy-forms::contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contacted = Contact::create($request->all());

        Mail::to(config('easy-forms.mail_to'))->send(new ContactMailable($request->all())); //custom mail

        return redirect()->route('contact.index')->with('sent', 'Message Sent!'); //custom message

    }
}
