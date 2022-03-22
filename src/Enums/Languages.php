<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum Languages: string implements Enumerated
{
    use HasEnumeration;

    public const EN = 'en';
    public const AA = 'aa';
    public const AB = 'ab';
    public const AF = 'af';
    public const AM = 'am';
    public const AR = 'ar';
    public const AS = 'as';
    public const AY = 'ay';
    public const AZ = 'az';
    public const BA = 'ba';
    public const BE = 'be';
    public const BG = 'bg';
    public const BH = 'bh';
    public const BI = 'bi';
    public const BN = 'bn';
    public const BO = 'bo';
    public const BR = 'br';
    public const CA = 'ca';
    public const CO = 'co';
    public const CS = 'cs';
    public const CY = 'cy';
    public const DA = 'da';
    public const DE = 'de';
    public const DZ = 'dz';
    public const EL = 'el';
    public const EO = 'eo';
    public const ES = 'es';
    public const ET = 'et';
    public const EU = 'eu';
    public const FA = 'fa';
    public const FI = 'fi';
    public const FJ = 'fj';
    public const FO = 'fo';
    public const FR = 'fr';
    public const FY = 'fy';
    public const GA = 'ga';
    public const GD = 'gd';
    public const GL = 'gl';
    public const GN = 'gn';
    public const GU = 'gu';
    public const HA = 'ha';
    public const HI = 'hi';
    public const HR = 'hr';
    public const HU = 'hu';
    public const HY = 'hy';
    public const IA = 'ia';
    public const IE = 'ie';
    public const IK = 'ik';
    public const IN = 'in';
    public const IS = 'is';
    public const IT = 'it';
    public const IW = 'iw';
    public const JA = 'ja';
    public const JI = 'ji';
    public const JW = 'jw';
    public const KA = 'ka';
    public const KK = 'kk';
    public const KL = 'kl';
    public const KM = 'km';
    public const KN = 'kn';
    public const KO = 'ko';
    public const KS = 'ks';
    public const KU = 'ku';
    public const KY = 'ky';
    public const LA = 'la';
    public const LN = 'ln';
    public const LO = 'lo';
    public const LT = 'lt';
    public const LV = 'lv';
    public const MG = 'mg';
    public const MI = 'mi';
    public const MK = 'mk';
    public const ML = 'ml';
    public const MN = 'mn';
    public const MO = 'mo';
    public const MR = 'mr';
    public const MS = 'ms';
    public const MT = 'mt';
    public const MY = 'my';
    public const NA = 'na';
    public const NE = 'ne';
    public const NL = 'nl';
    public const NO = 'no';
    public const OC = 'oc';
    public const OM = 'om';
    public const PA = 'pa';
    public const PL = 'pl';
    public const PS = 'ps';
    public const PT = 'pt';
    public const QU = 'qu';
    public const RM = 'rm';
    public const RN = 'rn';
    public const RO = 'ro';
    public const RU = 'ru';
    public const RW = 'rw';
    public const SA = 'sa';
    public const SD = 'sd';
    public const SG = 'sg';
    public const SH = 'sh';
    public const SI = 'si';
    public const SK = 'sk';
    public const SL = 'sl';
    public const SM = 'sm';
    public const SN = 'sn';
    public const SO = 'so';
    public const SQ = 'sq';
    public const SR = 'sr';
    public const SS = 'ss';
    public const ST = 'st';
    public const SU = 'su';
    public const SV = 'sv';
    public const SW = 'sw';
    public const TA = 'ta';
    public const TE = 'te';
    public const TG = 'tg';
    public const TH = 'th';
    public const TI = 'ti';
    public const TK = 'tk';
    public const TL = 'tl';
    public const TN = 'tn';
    public const TO = 'to';
    public const TR = 'tr';
    public const TS = 'ts';
    public const TT = 'tt';
    public const TW = 'tw';
    public const UK = 'uk';
    public const UR = 'ur';
    public const UZ = 'uz';
    public const VI = 'vi';
    public const VO = 'vo';
    public const WO = 'wo';
    public const XH = 'xh';
    public const YO = 'yo';
    public const ZH = 'zh';
    public const ZU = 'zu';

    public static function key(): string
    {
        return 'languages';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
