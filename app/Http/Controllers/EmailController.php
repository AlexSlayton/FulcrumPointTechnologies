<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

class EmailController extends Controller
{
    public function postContact(Request $request) {
    	$input = $request->all();
    	$data = array(
    		'firstName' => $input['firstName'],
    		'lastName' => $input['lastName'],
    		'email' => $input['email'],
    		'phone' => $input['phone'],	
    		'bodyMessage' => $input['message']
    		);

    	Mail::send('emails.sending', $data, function($message) use ($data){
    		$message->from($data['email']);
    		$message->to('someone@them.com');
    		$message->subject('Contact Form Email');

    	});

    	// return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    	// $request->session()->flash('status', 'Task was successful!');

    	return redirect('/contact')->with('status', 'Email Sent! Thanks for contacting us!');
    }
}
