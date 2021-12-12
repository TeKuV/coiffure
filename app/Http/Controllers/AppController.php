<?php

namespace App\Http\Controllers;

use App\Models\Coiffure;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function welcome(){
        $coiffures = Coiffure::take(4)->latest('created_at')->get();

        return view('pages.welcome', compact('coiffures'));
    }

    public function catalog()
    {
        $coiffures = Coiffure::all();

        return view('pages.catalog', compact('coiffures'));
    }

    public function aboutUs()
    {
        $coiffures = Coiffure::all();

        return view('pages.about', compact('coiffures'));
    }

    public function contactUs()
    {
        $coiffures = Coiffure::latest('created_at')->get();

        return view('pages.contact-us', compact('coiffures'));
    }

    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        );

        Mail::to($data['email'])->send(new ContactUsMail($data));
    }
}
