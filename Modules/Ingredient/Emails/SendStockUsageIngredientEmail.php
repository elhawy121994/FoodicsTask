<?php

namespace Modules\Ingredient\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendStockUsageIngredientEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('foodics@info.trask.com')
            ->view('ingredient::emails.stock_reminder_email')
            ->subject("Stock". $this->data['title']. "  Reminder")
            ->with('title', $this->data['title'])
            ->with('ingredient_slot', $this->data['ingredient_slot'])
            ->with('usage_reached', $this->data['usage_reached']);
    }
}
