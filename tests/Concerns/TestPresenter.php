<?php

declare(strict_types=1);

namespace Ollico\Utilities\Tests\Concerns;

use Ollico\Utilities\Presenter\Presenter;
use Ollico\Utilities\Tests\Concerns\TestPresentModel;

/**
 * @property \Ollico\Utilities\Tests\Concerns $model
 */
class TestPresenter extends Presenter
{
    public function instanceName(): string
    {
        return TestPresentModel::class;
    }

    public function guid(): string
    {
        return '1234-5678-90';
    }
}
