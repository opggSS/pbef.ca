<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;
use Mail;


class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(10);
        return view('admins.messages.index')->withMessages($messages)->withStatus('1');
    }
    public function unread()
    {
        $messages = Message::orderBy('id', 'desc')->where('status',0)->paginate(10);
        return view('admins.messages.index')->withMessages($messages)->withStatus('-1');
    }

    public function view($id){
        $message = Message::find($id);
        $message->status = 1;
        $message->save();
        return view('admins.messages.view')->withMessage($message);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
                'firstName'         => 'required|max:127',
                'lastName'       => 'required|max:127',
                'email' => 'required|email',
                'message' => 'required|max:255'
        ));
        // store in the database
        $message = new Message;
        $message->firstName = $request->firstName;
        $message->lastName = $request->lastName;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        Session::flash('success', 'Your message has been successfully sent!');
        
        self::sendEmail($message);
        return back();

        // header('Location: '.$_SERVER['REQUEST_URI']);r
    }

    private function sendEmail($message){
        $data = array(
            'firstName' => $message->firstName,
            'lastName' => $message->lastName,
            'email' => $message->email,
            'bodyMessage' => $message->message
        );

        Mail::send('admins.messages.email', $data ,function($message) use ($data){
            $message->from($data['email']);
            $message->to('jklsh0371@gmail.com');
            $message->subject('pbef.ca');

        });

    }

}
