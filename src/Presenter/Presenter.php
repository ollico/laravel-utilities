<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

use Exception;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;

abstract class Presenter implements Arrayable
{
    protected $model;

    public function __construct(Model $model)
    {
        abort_unless(
            $this->instanceName() === get_class($model),
            Exception::class,
            'The provided instances do to not match'
        );

        $this->model = $model;
    }

    public function modelInstance(): Model
    {
        return $this->model;
    }

    public function toArray()
    {
        return $this->model->toArray();
    }

    abstract public function instanceName(): string;
}
