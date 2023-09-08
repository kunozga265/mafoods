<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GeneratedRecipeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $recipe;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($recipe, $name)
    {
        $this->recipe = $recipe;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('generated_recipe')->subject($this->recipe->name. " Recipe");
    }
}
