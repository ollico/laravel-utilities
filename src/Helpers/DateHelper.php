<?php

declare(strict_types=1);

namespace Ollico\Utilities\Helpers;

use Carbon\Carbon;
use Exception;

class DateHelper
{
    public const DATE_READABLE = 'jS M, Y';

    public const DATETIME = 'Y-m-d H:i:s';

    public const DATETIME_READABLE = 'jS M, Y H:ia';

    public const DATE_AND_DAY_READABLE = 'D jS M, Y';

    public const TIME_READABLE = 'H:ia';

    public static function parseOr404(string $date, string $format = 'd/m/Y'): Carbon
    {
        try {
            return Carbon::createFromFormat($format, $date);
        } catch (Exception $error) {
            abort(404);
        }
    }

    public static function gmt(Carbon $date)
    {
        return $date->timezone('Europe/London');
    }
}
