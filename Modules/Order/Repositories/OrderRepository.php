<?php

namespace Modules\Order\Repositories;

use Modules\Infrastructure\Repositories\BaseRepository;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\ProductsOrder;
use Modules\Order\Repositories\Interfaces\OrderRepositoryInterface;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Order;
    }

    public function create(array $data)
    {
        $order =  parent::create([]);
        $products = $data['products'];
        foreach ($products as $key => $product) {
            $products[$key]['order_id'] = $order->id;
        }
        ProductsOrder::insert($products);

        return $order;
    }
}
