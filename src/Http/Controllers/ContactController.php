<?php

namespace Nihir\Contact\Http\Controllers;
use Illuminate\Http\Request;
use Nihir\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Nihir\Contact\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        $data = $request->all();
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($data));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
