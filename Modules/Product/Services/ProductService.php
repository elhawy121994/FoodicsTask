<?php

namespace Modules\Product\Services;

use Modules\Infrastructure\Services\BaseService;
use Modules\Product\Repositories\Interfaces\OrderRepositoryInterface;
use Modules\Product\Services\Interfaces\IngredientServiceInterface;

class ProductService  extends BaseService implements IngredientServiceInterface
{
    public function __construct(OrderRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
