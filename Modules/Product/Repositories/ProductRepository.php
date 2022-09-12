<?php

namespace Modules\Product\Repositories;

use Modules\Infrastructure\Repositories\BaseRepository;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Product;
    }
}
