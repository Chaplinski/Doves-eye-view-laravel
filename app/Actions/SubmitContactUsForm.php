<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SubmitContactUsForm
{
    use AsAction;

    public function handle(array $data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $location = $data['location'];
        $date = $data['date'];
        $how_did_you_find_us = $data['find-us'];
        $message = $data['message'];
        $how_we_were_found = '';

        switch ($how_did_you_find_us) {
            case $how_did_you_find_us == 'search':
                $how_we_were_found = 'Search Engine (Google, Bing, etc)';
                break;
            case $how_did_you_find_us == 'social':
                $how_we_were_found = 'Social Media (Facebook, Instagram, etc)';
                break;
            case $how_did_you_find_us == 'planner':
                $how_we_were_found = 'My Wedding Planner Found You';
                break;
            case $how_did_you_find_us == 'family':
                $how_we_were_found = 'Family/Friend Recommended You';
                break;
        }

        $body = 'Name: ' . $name . '<br>Email: ' . $email . '<br>Phone: ' . $phone . '<br>Location: '
            . $location . '<br>Date: ' . $date . '<br>How did you find us: ' . $how_we_were_found
            . '<br>Message: ' . $message;

        // Before this was getting the message ready
        // Below this is sending the message

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->isHTML(true);
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'doveseyeviewstreaming@gmail.com';
            $mail->Password   = 'lgsksxosvbrlawwq';
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('doveseyeviewstreaming@gmail.com', 'Contact Form Submission');
            $mail->addAddress('scott@doveseyeviewstreaming.com');
            $mail->Subject = '[DEV] Info Request - Contact Page';
            $mail->Body    = $body;
            $mail->AltBody = $body;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
