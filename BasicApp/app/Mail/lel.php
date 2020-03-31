<?php

namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class lel extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    public function __construct(user $user)
    {
        $this->user=$user;
    }

    public function build()
    {
        return $this->view('emails.hello');
    }
}