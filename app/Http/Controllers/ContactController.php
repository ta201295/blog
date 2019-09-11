<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function register ()
    {
    	return view('pages.contact');
    }

    public function insertData (Request $request)
    {
        $data = $request->all();

        $contact = new Contact;

        $contact->email = $data['email'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];

        $contact->save();

        return redirect('/');
    }
}