<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FavoritesEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $selectedClasses;

    /**
     * Create a new message instance.
     *
     * @param  array  $selectedClasses
     * @return void
     */
    public function __construct($selectedClasses)
    {
        $this->selectedClasses = $selectedClasses;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.favorites');
        // You can customize the view and add any additional logic here
    }
}
