<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

use Exception;
use Illuminate\Database\Eloquent\Model;

abstract class Presenter
{
    protected Model $model;

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

    abstract public function instanceName(): string;
}
