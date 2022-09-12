<?php

namespace Modules\Order\Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Event;
use Modules\Ingredient\Database\Seeders\IngredientDatabaseSeeder;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderControllerTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
        $this->seed(IngredientDatabaseSeeder::class);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCreateOrderSuccessfully()
    {
        Event::fake();
        $this->withoutExceptionHandling();
        $response = $this->postJson('api/v1/order', ["products" => [["product_id" => 1, "quantity" => 2]]]);
        $response->assertStatus(201);
        $response->assertCreated();
        $response->assertJson(['id' => 1]);
    }
}
