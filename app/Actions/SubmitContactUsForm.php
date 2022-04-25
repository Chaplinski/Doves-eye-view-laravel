<?php

namespace App\Actions;

use App\Mail\ContactFormSubmitted;
use App\Models\ContactFormSubmission;
use Lorisleiva\Actions\Concerns\AsAction;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SubmitContactUsForm
{
    use AsAction;

    public function handle(array $data)
    {
        $contactFormSubmission = new ContactFormSubmission();
        $contactFormSubmission->name = $data['name'];
        $contactFormSubmission->email = $data['email'];
        $contactFormSubmission->phone = $data['phone'];
        $contactFormSubmission->location = $data['location'];
        $contactFormSubmission->event_date = $data['date'];
        $contactFormSubmission->found_us_how = $data['find-us'];
        $contactFormSubmission->message = $data['message'];
        $contactFormSubmission->save();

        $how_did_you_find_us = $contactFormSubmission->found_us_how;

        $how_we_were_found = match ($how_did_you_find_us) {
            $how_did_you_find_us == 'search' => 'Search Engine (Google, Bing, etc)',
            $how_did_you_find_us == 'social' => 'Social Media (Facebook, Instagram, etc)',
            $how_did_you_find_us == 'planner' => 'My Wedding Planner Found You',
            $how_did_you_find_us == 'family' => 'Family/Friend Recommended You',
            default => '',
        };

        $body = 'Name: ' . $contactFormSubmission->name . '<br>Email: ' . $contactFormSubmission->email
            . '<br>Phone: ' . $contactFormSubmission->phone . '<br>Location: ' . $contactFormSubmission->location
            . '<br>Date: ' . $contactFormSubmission->event_date . '<br>How did you find us: '
            . $how_we_were_found . '<br>Message: ' . $contactFormSubmission->message;

        //TODO read laravel/mailgun docs and send body to this class to be mailed.
        new ContactFormSubmitted();
    }
}
