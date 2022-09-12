<?php

namespace Modules\Order\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Infrastructure\Http\Controllers\BaseController;
use Modules\Order\Http\Requests\CreateOrderRequest;
use Modules\Order\Services\Interfaces\OrderServiceInterface;

class OrderController extends BaseController
{
    protected $orderService;

    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService = $orderService;
    }
    /**
     * Store a newly created resource in storage.
     * @param CreateOrderRequest $request
     * @return JsonResponse
     */
    public function store(CreateOrderRequest $request): JsonResponse
    {
        $data = $request->validated();
        $createdOrder = $this->orderService->create($data);
        if (!empty($createdOrder)) {
            return $this->created(['id' => $createdOrder->id]);
        } else {
            return $this->errorResponse(500, "error");
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     */
    public function show(int $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     */
    public function edit(int $id)
    {
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     */
    public function destroy(int $id)
    {

    }
}
