<?php

namespace Modules\Ingredient\Services;

use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;
use Modules\Infrastructure\Services\BaseService;
use Modules\Ingredient\Repositories\Interfaces\IngredientRepositoryInterface;
use Modules\Ingredient\Services\Interfaces\IngredientServiceInterface;
use Modules\Order\Entities\Order;
use Modules\Order\Events\MerchantStockIngredientReached;

class IngredientService extends BaseService implements IngredientServiceInterface
{
    public function __construct(IngredientRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public function updateStock(Order $order): bool
    {
        $products = $order->products;
        foreach ($products as $product) {
            $ingredients = $product->ingredients;
            foreach ($ingredients as $ingredient) {
                $ingredientSlot = $ingredient->slots()->orderBy('slot', 'DESC')->first();
                $ingredient->stock_amount = $ingredient->stock_amount - ($ingredientSlot->slot * $product->pivot->quantity);
                $ingredient->save();
                $notification = $ingredient->notifications->whereNull('sent_at')->first();
                $availablePercent = ($ingredient->stock_amount / $ingredient->start_amount) * 100;
                if ($availablePercent <= $notification->usage_notification_send_at) {
                    $notification->sent_at = Carbon::now();
                    $notification->save();
                    event(new MerchantStockIngredientReached($notification, $ingredient, $ingredientSlot));
                }
            }
        }
        return true;
    }
}
