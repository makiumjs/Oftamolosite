<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class CustomController extends Controller
{

    public function toHome() {
        return view('index');
    }

    public function toServices() {
        return view("services");
    }

    public function toContacts() {
        return view("contacts");
    }

    public function store(Request $request) {

        $user = $request->input("user");
        $email = $request->input("email");
        $message = $request->input("message");
        
        $contacts = compact("user", "email", "message");

        Mail::to($email)->send(new ContactMail($contacts)); 

        return redirect(route('thank.you', ['name'=>$user]));
    }

    public function thankYou($name)
    {
        return view("thankYou", ['name'=>$name]);    
    }

}