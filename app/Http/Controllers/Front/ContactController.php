<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function contact_message_store(Request $request)
    { $this->validate ($request,[
        'c_fname'=>'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',
        'c_lname'=>'required',
        'c_email'=>'required',
        'c_subject'=>'required',
    ],[
        'c_fname' => 'Please Enter The First Name',
        'c_lname' => 'Please Enter The Last Name',
        'c_email' => 'Please Enter The Email.',
        'c_subject' => 'Please Enter The Subject.',
    ]);
        $contact = new Contact();
        $contact->c_fname = $request->c_fname;
        $contact->c_lname = $request->c_lname;
        $contact->c_email = $request->c_email;
        $contact->c_subject = $request->c_subject;
        $contact->c_message = $request->c_message;
        $contact->save();
    }
}
