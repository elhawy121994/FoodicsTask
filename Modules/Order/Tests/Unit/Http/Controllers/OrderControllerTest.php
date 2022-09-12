<?php

namespace Modules\Order\Tests\Unit\Http\Controllers;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Modules\Ingredient\Database\Seeders\IngredientDatabaseSeeder;
use Modules\Order\Entities\Order;
use Modules\Order\Services\Interfaces\OrderServiceInterface;
use Modules\Order\Services\OrderService;
use Tests\TestCase;

class OrderControllerTest extends TestCase
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

    public function testCreateOrderSuccessfully()
    {
        $body = ["products" => [["product_id" => 1, "quantity" => 2]]];
        $order = new Order();
        $order->id = 11;
        $orderServiceMock = Mockery::mock(OrderServiceInterface::class);
        $orderServiceMock->shouldReceive('create')
            ->with($body)
            ->once()
            ->andReturn($order);
        $this->app->instance(OrderService::class, $orderServiceMock);
        $response = $this->postJson('api/v1/order', $body);
        $response->assertCreated();
        $response->assertJson(['id' => 11]);
    }
}
