<?php

namespace Modules\Ingredient\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Ingredient\Entities\Ingredient;
use Modules\Ingredient\Entities\IngredientNotification;
use Modules\Ingredient\Entities\IngredientSlot;
use Modules\Product\Entities\Product;

class IngredientDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $burger = Product::firstOrCreate(['name' => 'Burger']);

        $beef = Ingredient::firstOrCreate(['name' => 'Beef'], ['start_amount' => 20000, 'stock_amount' => 20000]);
        $cheese = Ingredient::firstOrCreate(['name' => 'Cheese'], ['start_amount' => 5000, 'stock_amount' => 5000]);
        $onion = Ingredient::firstOrCreate(['name' => 'Onion'], ['start_amount' => 1000, 'stock_amount' => 1000]);

        //prepare slot type and title for Ingredient
        IngredientSlot::firstOrCreate(['title' => 'medium' , 'ingredient_id' => $beef->id, 'slot' => 150]);
        IngredientSlot::firstOrCreate(['title' => 'small' , 'ingredient_id' => $cheese->id, 'slot' => 30]);
        IngredientSlot::firstOrCreate(['title' => 'small' , 'ingredient_id' => $onion->id, 'slot' => 20]);

        //prepare notification sent when usage reach to 50% percentage
        IngredientNotification::firstOrCreate(['ingredient_id' => $beef->id, 'usage_notification_send_at' => '50']);
        IngredientNotification::firstOrCreate(['ingredient_id' => $cheese->id, 'usage_notification_send_at' => '50']);
        IngredientNotification::firstOrCreate(['ingredient_id' => $onion->id, 'usage_notification_send_at' => '50']);

        // prepare products ingredients
        $burger->ingredients()->sync([$beef->id, $cheese->id, $onion->id]);
    }
}
