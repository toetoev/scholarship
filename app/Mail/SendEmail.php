<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $da;

    public function __construct($data)
    {
        $this->da = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_data = $this->da;
        return $this->view('frontend.sendmail', compact('e_data'))->subject('Applicant form');
    }
}
