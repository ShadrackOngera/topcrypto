<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use NotificationChannels\Telegram\TelegramUpdates;


class ContactController extends Controller
{
    //show contact page
    public function showContactPage(){

        return view('pages.contact');
    }

    public function store(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

        $message = new contact();
        $message->firstName = $request->firstName;
        $message->lastName = $request->lastName;
        $message->email = $request->email;
        $message->description = $request->description;
        $message->save();

        Notification::route('telegram', '5560228011')->notify(new \App\Notifications\contactNotification($message));
        return redirect('/contact');
    }
}
