<?php

namespace Modules\Ingredient\Repositories;

use Modules\Infrastructure\Repositories\BaseRepository;
use Modules\Ingredient\Entities\Ingredient;
use Modules\Ingredient\Repositories\Interfaces\IngredientRepositoryInterface;

class IngredientRepository extends BaseRepository implements IngredientRepositoryInterface
{
    public function __construct()
    {
        $this->model = new Ingredient;
    }
}
