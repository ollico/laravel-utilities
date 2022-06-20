<?php

declare(strict_types=1);

namespace Ollico\Utilities\Helpers;

use Carbon\Carbon;

class TimezoneHelper
{
    public static function gmt(Carbon $date)
    {
        return $date->timezone('Europe/London');
    }
}
