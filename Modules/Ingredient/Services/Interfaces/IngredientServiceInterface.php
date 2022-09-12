<?php

namespace Modules\Ingredient\Services\Interfaces;

use Modules\Infrastructure\Services\Interfaces\BaseServiceInterface;
use Modules\Order\Entities\Order;

interface IngredientServiceInterface extends BaseServiceInterface
{
    public function updateStock(Order $order): bool;
}
