<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public $subject;
    public function __construct(string $subject,array $data)
    {
    $this->subject = $subject;
    $this->data = array_merge(['memberName' => ''], $data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


    return $this->subject($this->subject)
        ->view('emails.emailsenter')
        ->with(['data' => $this->data]);
}
}
