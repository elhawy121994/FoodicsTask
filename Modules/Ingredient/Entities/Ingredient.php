<?php

namespace Modules\Ingredient\Entities;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [];

    public function slots()
    {
        return$this->hasMany(IngredientSlot::class);
    }

    public function notifications()
    {
        return $this->hasMany(IngredientNotification::class);
    }
}
