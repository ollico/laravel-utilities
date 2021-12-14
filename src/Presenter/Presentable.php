<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

interface Presentable
{
    public function present(): Presenter;

    public function getPresenter(): string;
}
