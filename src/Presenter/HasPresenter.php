<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

trait HasPresenter
{
    protected ?Presenter $cachedPresenterInstance = null;

    public function present(): Presenter
    {
        if ($this->cachedPresenterInstance) {
            return $this->cachedPresenterInstance;
        }

        $presenter = $this->getPresenter();

        $this->cachedPresenterInstance = new $presenter($this);

        return $this->cachedPresenterInstance;
    }
}
