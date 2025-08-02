<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

trait HasPresenter
{
    protected $cachedPresenterInstance = null;

    public function present(?string $presenter = null): Presenter
    {
        if ($this->cachedPresenterInstance) {
            return $this->cachedPresenterInstance;
        }

        $presenterClass = $presenter ?? $this->getPresenter();

        $this->cachedPresenterInstance = new $presenterClass($this);

        return $this->cachedPresenterInstance;
    }
}
