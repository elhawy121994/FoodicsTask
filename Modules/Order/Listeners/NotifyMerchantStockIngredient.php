<?php

namespace Modules\Order\Listeners;

use Illuminate\Support\Facades\Mail;
use Modules\Ingredient\Emails\SendStockUsageIngredientEmail;
use Modules\Order\Events\MerchantStockIngredientReached;

class NotifyMerchantStockIngredient
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param MerchantStockIngredientReached $event
     * @return void
     */
    public function handle(MerchantStockIngredientReached $event)
    {
        Mail::to(config('app.merchant_mail'))->send(new SendStockUsageIngredientEmail($event->getData()));
    }
}
