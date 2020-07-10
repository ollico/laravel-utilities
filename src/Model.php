<?php

declare(strict_types=1);

namespace Ollico\Utilities;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    /**
     * "I too like to live dangerously"
     *
     * @var array
     */
    protected $guarded = [];
}
