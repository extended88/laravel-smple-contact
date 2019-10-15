<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;

class ContactMailClient extends Mailable
{
    use Queueable, SerializesModels;

    protected $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact/sendmailClient')
            ->subject('お問い合わせがありました。')
            ->with([
                'contact_day' => $this->request->input('day'),
                'contact_name' => $this->request->input('name'),
                'contact_email' => $this->request->input('email'),
                'contact_subject' => $this->request->input('subject'),
                'contact_message' => $this->request->input('message'),
            ]);
    }
}
