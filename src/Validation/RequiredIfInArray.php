<?php

declare(strict_types=1);

namespace Ollico\Utilities\Validation;

class RequiredIfInArray
{
    public $key;

    public $value;

    public function __construct(array $data, $value)
    {
        $this->data = $data;
        $this->value = $value;
    }

    public function __toString()
    {
        if (! is_array($this->data)) {
            return '';
        }

        return in_array($this->value, $this->data) ? 'required' : '';
    }
}
