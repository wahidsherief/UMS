<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PendingAccount extends Mailable
{
    use Queueable, SerializesModels;
    public $accept;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($accept)
    {
        $this->accept = $accept;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Congratulation mail from UMS')->view('users.admin.sent_account_mail');
    }
}
