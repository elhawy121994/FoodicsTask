<?php

namespace Modules\Order\Events;

use Illuminate\Queue\SerializesModels;

class MerchantStockIngredientReached
{
    use SerializesModels;

    protected $notificationSlot;
    protected $ingredientSlot;
    protected $ingredient;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($notification, $ingredient, $ingredientSlot)
    {
        $this->notificationSlot = $notification;
        $this->ingredientSlot = $ingredientSlot;
        $this->ingredient = $ingredient;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    public function getData()
    {
        return [
            'usage_reached' => $this->notificationSlot->usage_notification_send_at,
            'title' => $this->ingredient->name,
            'ingredient_slot' => $this->ingredientSlot->slot
        ];
    }
}
