<?php

declare(strict_types=1);

namespace Ollico\Utilities\Validation;

use Illuminate\Contracts\Validation\Rule;

class Postcode implements Rule
{
    /**
     * @param  string  $attribute
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match(implode('', [
            '/^(([A-Z]{1,2}\\d[A-Z\\d]?|ASCN|STHL|TDCU|BBND|[BFS]IQQ|PCRN|TKCA) ?',
            '\\d[A-Z]{2}|BFPO ?\\d{1,4}|(KY\\d|MSR|VG|AI)[ -]?\\d{4}|[A-Z]{2} ?',
            '\\d{2}|GE ?CX|GIR ?0A{2}|SAN ?TA1)$/u',
        ]), $value ? $value : '') === 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not a valid UK postcode.';
    }
}
