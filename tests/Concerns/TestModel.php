<?php

declare(strict_types=1);

namespace Ollico\Utilities\Tests\Concerns;

use Ollico\Utilities\Model;
use Ollico\Utilities\Presenter\HasPresenter;
use Ollico\Utilities\Presenter\Presentable;

class TestModel extends Model implements Presentable
{
    use HasPresenter;

    public function getPresenter(): string
    {
        return TestPresenter::class;
    }
}
