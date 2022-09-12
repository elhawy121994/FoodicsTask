<?php

namespace Modules\Order\Tests\Unit\Http\Requests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Modules\Ingredient\Database\Seeders\IngredientDatabaseSeeder;
use Modules\Order\Entities\Order;
use Modules\Order\Services\Interfaces\OrderServiceInterface;
use Modules\Order\Services\OrderService;
use Tests\TestCase;

class CreateOrderRequestTest extends TestCase
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

    public function testCreateOrderValidationFaile()
    {
        $body = ["products" => [["product_id" => 552, "quantity" => 0]]];
        $order = new Order();
        $order->id = 11;
        $referralServiceMock = Mockery::spy(OrderServiceInterface::class);
        $referralServiceMock->shouldNotHaveReceived("create");
        $this->app->instance(OrderService::class, $referralServiceMock);
        $this->app->instance(OrderServiceInterface::class, $referralServiceMock);
        $response = $this->postJson('api/v1/order', $body);
        $response->assertStatus(422);
    }

}
