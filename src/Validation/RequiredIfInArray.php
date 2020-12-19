<?php

declare(strict_types=1);

namespace Ollico\Utilities\Validation;

use Illuminate\Support\Arr;

class RequiredIfInArray
{
    public array $data = [];

    public string $key;

    public $value;

    public function __construct(array $data, string $key, $value)
    {
        $this->data = $data;
        $this->key = $key;
        $this->value = $value;
    }

    public function __toString()
    {
        $values = Arr::get($this->data, $this->key, []);

        if (!is_array($values)) {
            return '';
        }

        return in_array($this->value, $values) ? 'required' : '';
    }
}