<?php

namespace App\Mail;

use App\Models\Mail;
use http\Params;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailForQueuing extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Mail|null
     */
    private $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mail $mail = null)
    {
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail_interface@mailtrap.com', 'Mail Interface')
            ->subject($this->mail['title'])
            ->markdown('mail.mail')
            ->with([
                'mail' => $this->mail
            ]);
    }
}
