<?php

namespace Modules\Infrastructure\Services;

use Modules\Infrastructure\Repositories\Interfaces\BaseRepositoryInterface;
use Modules\Infrastructure\Services\Interfaces\BaseServiceInterface;

class BaseService implements BaseServiceInterface
{
    public $repository;

    public function __construct(BaseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }
}
