<?php

namespace Modules\Ingredient\Tests\Unit\Services;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Mockery;
use Modules\Ingredient\Database\Seeders\IngredientDatabaseSeeder;
use Modules\Ingredient\Emails\SendStockUsageIngredientEmail;
use Modules\Ingredient\Services\IngredientService;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\ProductsOrder;
use Modules\Order\Events\MerchantStockIngredientReached;
use Modules\Product\Entities\Product;
use Tests\TestCase;

class IngredientServiceTest extends TestCase
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

    public function testCreateOrderAndStockUpdate()
    {
        Event::fake();
        $order = (new Order())->create();
        $product = Product::where('name', 'Burger')->first();
        ProductsOrder::insert(['order_id' => $order->id, 'product_id' => $product->id, 'quantity' => 4]);
        $ingredientService = resolve(IngredientService::class);
        $result = $ingredientService->updateStock($order);
        $this->assertTrue($result);
        Event::assertNotDispatched(MerchantStockIngredientReached::class);
    }

    public function testCreateOrderAndStockTriggerEventAndEmailSent()
    {
        Mail::fake();
        $order = (new Order())->create();
        $product = Product::where('name', 'Burger')->first();
        ProductsOrder::insert(['order_id' => $order->id, 'product_id' => $product->id, 'quantity' => 100]);
        $ingredientService = resolve(IngredientService::class);
        $ingredients = $product->ingredients;
        //stock not updated yet
        foreach ($ingredients as $ingredient) {
            $this->assertTrue($ingredient->stock_amount ==  $ingredient->start_amount);
        }
        $result = $ingredientService->updateStock($order);
        unset($product->ingredients);
        $ingredients = $product->ingredients;

        //test stock was updated
        foreach ($ingredients as $ingredient) {
            $this->assertTrue($ingredient->stock_amount <  $ingredient->start_amount);
        }
        $this->assertTrue($result);
        Mail::assertSent(SendStockUsageIngredientEmail::class, function ($mail) {
            return $mail->hasTo('elhawy121994@gmail.com');
        });
    }

}
