<?php

namespace App\Http\Controllers\Front;

use App\Models\User;

use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $param = $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email',
                'number' => 'nullable|max:120',
                'message' => 'required|min:2|max:500',
        ],['name.required' => 'Polje ime je obavezno!',
        'name.min' => 'Neophodno je da unesete najmanje dva haraktera!',
        'email.required' => 'Polje e-mail je obavezno!',
        'message.required' => 'Polje poruka je obavezno!',
        'message.min' => 'Neophodno je da unesete najmanje dva haraktera!']);

        $email = User::get()->first()->email;
         
        Mail::to($email)->send(new Contact($param));

        session()->flash('success', 'E-mail je uspešno poslat');
        return redirect()->back();
        
    }
}
