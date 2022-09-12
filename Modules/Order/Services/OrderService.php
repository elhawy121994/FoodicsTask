<?php

namespace Modules\Order\Services;

use Modules\Infrastructure\Services\BaseService;
use Modules\Ingredient\Services\Interfaces\IngredientServiceInterface;
use Modules\Order\Repositories\Interfaces\OrderRepositoryInterface;
use Modules\Order\Services\Interfaces\OrderServiceInterface;

class OrderService  extends BaseService implements OrderServiceInterface
{
    protected $ingredientService;

    public function __construct(OrderRepositoryInterface $repository, IngredientServiceInterface $ingredientService)
    {
        $this->ingredientService = $ingredientService;
        parent::__construct($repository);
    }

    public function create(array $data)
    {
        $createdOrder =  parent::create($data);
        if ($createdOrder) {
            $this->ingredientService->updateStock($createdOrder);
        }
        return $createdOrder;
    }
}
