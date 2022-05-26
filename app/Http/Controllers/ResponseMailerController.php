<?php

namespace App\Http\Controllers;

use App\Models\ResponseMailer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ResponseMailerController extends Controller
{

    public function contactus(){
        return view('frontend.contactus');
    }
    
    public function storeContactForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'subject'=>'required',
            'message' => 'required'
         ]);

        //  Store data in database
        ResponseMailer::create($request->all());


        // dd($request->get('message'));

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'response_message' => $request->get('message'),
            
        ), function($message) use ($request){
            $message->from('response@knktextile.com');
            $message->to('sthakisa36@gmail.com', 'Chrisha Shrestha')->subject('Response from Website!!');
        });
   
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
