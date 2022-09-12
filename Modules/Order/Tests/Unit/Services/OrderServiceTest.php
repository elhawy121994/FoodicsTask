<?php

namespace Modules\Order\Tests\Unit\Services;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Modules\Ingredient\Database\Seeders\IngredientDatabaseSeeder;
use Modules\Ingredient\Services\IngredientService;
use Modules\Ingredient\Services\Interfaces\IngredientServiceInterface;
use Modules\Order\Entities\Order;
use Modules\Order\Repositories\Interfaces\OrderRepositoryInterface;
use Modules\Order\Repositories\OrderRepository;
use Modules\Order\Services\OrderService;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class OrderServiceTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->seed(IngredientDatabaseSeeder::class);

    }

    public function testCreateOrderAndTriggerStockSuccess()
    {
        $body = ["products" => [["product_id" => 1, "quantity" => 2]]];
        $order = new Order();
        $order->id = 1;

        $orderRepoMock = \Mockery::mock(OrderRepositoryInterface::class);
        $orderRepoMock->shouldReceive('create')
            ->andReturn($order);

        $ingredientMock = \Mockery::mock(IngredientServiceInterface::class);
        $ingredientMock->shouldReceive('updateStock')
            ->with($order)
            ->andReturn(true);


        $this->app->instance(OrderRepository::class, $orderRepoMock);
        $this->app->instance(IngredientService::class, $ingredientMock);

        $orderService = resolve(OrderService::class);
        $result = $orderService->create($body);
        $this->assertInstanceOf(Order::class, $result);
        assertEquals($result->id, $order->id);

    }

}
