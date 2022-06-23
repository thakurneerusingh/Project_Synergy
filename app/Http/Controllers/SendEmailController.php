<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Mail;
 
use App\Mail\NotifyMail;
 
 
class SendEmailController extends Controller
{
     
    public function mail()
    {
    Mail::send('mail.gmail',array(

        'mobile' => $data['mobile'], 

        'email' => $data['email'], 

        'type' => $data['type'], 

        'capacity' => $data['capacity'], 

        'pump' => $data['pump'], 

        'Choose' => $data['Choose'], 

        'qty' => $data['qty'],

        'description' => $data['description']

    ), function($message) use ($request){ 

        $message->from($request->email); 

        $message->to('thakurneeru316@gmail.com', 'Admin')->subject($request->get('subject')); 
});
return response()->json(['success' => true]);

    } 
}