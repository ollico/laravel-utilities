<?php

declare(strict_types=1);

namespace Ollico\Utilities\Validation;

use Illuminate\Support\Arr;
use Ollico\Utilities\Enums\BooleanOther;

class RequiredIfOther
{
    public $data = [];

    public $key;

    public $value;

    public $isInArray = false;

    public $length = 5000;

    public function __construct(
        $data,
        string $key,
        int $length = 5000,
        string|BooleanOther $value = BooleanOther::OTHER,
        bool $isInArray = false
    ) {
        $this->data = $data;
        $this->key = $key;
        $this->value = $value instanceof BooleanOther ? $value->value : $value;
        $this->length = $length;
        $this->isInArray = $isInArray;
    }

    public static function make($data, string $key): self
    {
        return new self($data, $key);
    }

    public function otherValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function inArray(): self
    {
        $this->isInArray = true;

        return $this;
    }

    public function rules(): array
    {
        $rules = ['nullable', 'string', 'max:' . $this->length];

        if ($this->isInArray) {
            $rules[] = (new RequiredIfInArray(
                Arr::wrap(Arr::get($this->data, $this->key, [])),
                $this->value
            ))->__toString();
        } else {
            $rules[] = 'required_if:' . $this->key . ',' . $this->value;
        }

        return $rules;
    }

    public function __toString()
    {
        return implode('|', $this->rules());
    }
}
