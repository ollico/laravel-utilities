<?php

declare(strict_types=1);

namespace Ollico\Utilities;

use Illuminate\Support\Arr;

class Sanitizer
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function moneyToInt($value): int
    {
        $value = (new self($value))
            ->replace(['$', '£', ','], '')
            ->stripSpaces()
            ->value();

        return (int) ($value * 100);
    }

    public static function phone($value): string
    {
        return (new self($value))
            ->replace(['+44(0)', '+0044', '0044', '+44'], 0)
            ->strip(['(0)', '(', ')'])
            ->stripSpaces()
            ->uppercase()
            ->value();
    }

    public static function email($value): string
    {
        return (new self($value))->stripSpaces()->lowercase()->value();
    }

    public static function postcode($value)
    {
        return (new self($value))->stripSpaces()->uppercase()->value();
    }

    public static function maxAndMin(int $value, int $max, int $min): int
    {
        if ($value > $max) {
            $value = $max;
        }

        if ($value < $min) {
            $value = $min;
        }

        return $value;
    }

    public function strip($matches)
    {
        $this->value = str_replace(Arr::wrap($matches), '', $this->value);
        return $this;
    }

    public function replace($matches, $replacement)
    {
        $this->value = str_replace(Arr::wrap($matches), $replacement, $this->value);
        return $this;
    }

    public function lowercase(): self
    {
        $this->value = mb_strtolower($this->value);
        return $this;
    }

    public function uppercase(): self
    {
        $this->value = mb_strtoupper($this->value);
        return $this;
    }

    public function stripSpaces(): self
    {
        return $this->strip([' ']);
    }
}
