<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Product\Entities\Product;

class Order extends Model
{
    protected $fillable = [];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'products_order')->withPivot('quantity');;
    }
}
