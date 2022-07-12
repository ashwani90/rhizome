<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $subject;
    public $email;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subject, $email, $content)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->email = $email;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            "name" => $this->name,
            "subject" => $this->subject,
            "email" => $this->email,
            "content" => $this->content,
        ];
        return $this->view('emails.contact', ["data" => $data]);
    }
}
