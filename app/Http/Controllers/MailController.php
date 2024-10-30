<?php

namespace App\Http\Controllers;

use App\Functions\Mail as Mailler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Mail\Mailables\Address;

class MailController extends Controller
{
    public function send(Request $Request)
    {
        $validator = Validator::make($Request->all(), [
            'name' => ['required', 'string'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        Mailler::plain([
            'subject' => $Request->type == 'contact' ? __('Thank you for contacting Morocco Adventure City') : __('Thank you for your reservation at Morocco Adventure City'),
            'from' => new Address(env('MAIL_CONTACT_ADDRESS'), env('MAIL_NAME')),
            'to' => new Address($Request->email, $Request->name),
            'content' => [__('We have received your message and will get back to you as soon as possible.'), __('Thank you for reaching out to us.')]
        ]);

        foreach ([env('MAIL_CONTACT_ADDRESS'), "ahmedqo1995@gmail.com"] as $email) {
            Mailler::alert([
                'subject' => $Request->type == 'contact' ? __('New Contact Submission') : __('New Reservation Submission'),
                'from' => $Request->type == 'contact' ? new Address($Request->email, $Request->name) : new Address(env('MAIL_NOREPLAY_ADDRESS'), env('MAIL_NAME')),
                'to' => new Address($email, env('MAIL_NAME')),
                'content' => (object) [
                    'type' => $Request->type,
                    'name' => $Request->name,
                    'email' => $Request->email,
                    'phone' => $Request->phone,
                    'country' => $Request->country,
                    'message' => $Request->message,
                ]
            ]);
        }

        return Redirect::back()->with([
            'message' => $Request->type == 'contact' ? __('Your message has been sent successfully.') : __('Your reservation has been successfully completed.'),
            'type' => 'success'
        ]);
    }
}
