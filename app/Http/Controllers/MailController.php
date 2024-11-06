<?php

namespace App\Http\Controllers;

use App\Functions\Mail as Mailler;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Mail\Mailables\Address;

class MailController extends Controller
{
    public function contact(Request $Request)
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
            'subject' => __('Thank you for contacting Morocco Adventure City'),
            'from' => new Address(env('MAIL_CONTACT_ADDRESS'), env('MAIL_NAME')),
            'to' => new Address($Request->email, $Request->name),
            'content' => [__('We have received your message and will get back to you as soon as possible.'), __('Thank you for reaching out to us.')]
        ]);

        Mailler::alert([
            'subject' => __('New Contact Submission'),
            'from' => new Address($Request->email, $Request->name),
            'to' => new Address(env('MAIL_CONTACT_ADDRESS'), env('MAIL_NAME')),
            'content' => (object) [
                'excursion' => $Request->excursion,
                'name' => $Request->name,
                'email' => $Request->email,
                'phone' => $Request->phone,
                'country' => $Request->country,
                'message' => $Request->message,
            ]
        ]);

        return Redirect::back()->with([
            'message' => $Request->type == 'contact' ? __('Your message has been sent successfully.') : __('Your reservation has been successfully completed.'),
            'type' => 'success'
        ]);
    }

    public function reserve(Request $Request)
    {
        $validator = Validator::make($Request->all(), [
            'last_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'pick_up_location' => ['required', 'string'],
            'number_of_people' => ['required', 'string'],
            'date' =>  ['required', 'date', 'after:today'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        $Reservation = Reservation::create($Request->all());

        Mailler::plain([
            'subject' => __('Thank you for your reservation at Morocco Adventure City'),
            'from' => new Address(env('MAIL_CONTACT_ADDRESS'), env('MAIL_NAME')),
            'to' => new Address($Request->email, $Request->name),
            'content' => [__('We have received your message and will get back to you as soon as possible.'), __('Thank you for reaching out to us.')]
        ]);

        foreach ([env('MAIL_CONTACT_ADDRESS'), "ahmedqo1995@gmail.com"] as $email) {
            Mailler::alert([
                'subject' => __('New Reservation Submission'),
                'from' =>  new Address(env('MAIL_NOREPLAY_ADDRESS'), env('MAIL_NAME')),
                'to' => new Address($email, env('MAIL_NAME')),
                'content' => $Reservation
            ]);
        }

        return Redirect::back()->with([
            'message' => $Request->type == 'contact' ? __('Your message has been sent successfully.') : __('Your reservation has been successfully completed.'),
            'type' => 'success'
        ]);
    }
}
