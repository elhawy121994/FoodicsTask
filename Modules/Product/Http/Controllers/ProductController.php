<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Infrastructure\Http\Controllers\BaseController;
use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Product\Services\Interfaces\IngredientServiceInterface;

class ProductController extends BaseController
{
    protected $productService;

    public function __construct(IngredientServiceInterface $productService)
    {
        $this->productService = $productService;
    }


    public function store(CreateProductRequest $request): JsonResponse
    {
        $data = $request->validated();
        $this->productService->create($data);
        return $this->created();
    }

    /**
     * Show the specified resource.
     * @param int $id
     */
    public function show($id)
    {
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     */
    public function destroy($id)
    {
        //
    }
}
