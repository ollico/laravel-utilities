<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;
use Ollico\Utilities\Enums\Concerns\HasKeyPrefix;

enum Languages: string implements Enumerated
{
    use HasEnumeration;
    use HasKeyPrefix {
        HasKeyPrefix::keyPrefix insteadof HasEnumeration;
    }

    case EN = 'en';
    case AA = 'aa';
    case AB = 'ab';
    case AF = 'af';
    case AM = 'am';
    case AR = 'ar';
    case AS = 'as';
    case AY = 'ay';
    case AZ = 'az';
    case BA = 'ba';
    case BE = 'be';
    case BG = 'bg';
    case BH = 'bh';
    case BI = 'bi';
    case BN = 'bn';
    case BO = 'bo';
    case BR = 'br';
    case CA = 'ca';
    case CO = 'co';
    case CS = 'cs';
    case CY = 'cy';
    case DA = 'da';
    case DE = 'de';
    case DZ = 'dz';
    case EL = 'el';
    case EO = 'eo';
    case ES = 'es';
    case ET = 'et';
    case EU = 'eu';
    case FA = 'fa';
    case FI = 'fi';
    case FJ = 'fj';
    case FO = 'fo';
    case FR = 'fr';
    case FY = 'fy';
    case GA = 'ga';
    case GD = 'gd';
    case GL = 'gl';
    case GN = 'gn';
    case GU = 'gu';
    case HA = 'ha';
    case HI = 'hi';
    case HR = 'hr';
    case HU = 'hu';
    case HY = 'hy';
    case IA = 'ia';
    case IE = 'ie';
    case IK = 'ik';
    case IN = 'in';
    case IS = 'is';
    case IT = 'it';
    case IW = 'iw';
    case JA = 'ja';
    case JI = 'ji';
    case JW = 'jw';
    case KA = 'ka';
    case KK = 'kk';
    case KL = 'kl';
    case KM = 'km';
    case KN = 'kn';
    case KO = 'ko';
    case KS = 'ks';
    case KU = 'ku';
    case KY = 'ky';
    case LA = 'la';
    case LN = 'ln';
    case LO = 'lo';
    case LT = 'lt';
    case LV = 'lv';
    case MG = 'mg';
    case MI = 'mi';
    case MK = 'mk';
    case ML = 'ml';
    case MN = 'mn';
    case MO = 'mo';
    case MR = 'mr';
    case MS = 'ms';
    case MT = 'mt';
    case MY = 'my';
    case NA = 'na';
    case NE = 'ne';
    case NL = 'nl';
    case NO = 'no';
    case OC = 'oc';
    case OM = 'om';
    case PA = 'pa';
    case PL = 'pl';
    case PS = 'ps';
    case PT = 'pt';
    case QU = 'qu';
    case RM = 'rm';
    case RN = 'rn';
    case RO = 'ro';
    case RU = 'ru';
    case RW = 'rw';
    case SA = 'sa';
    case SD = 'sd';
    case SG = 'sg';
    case SH = 'sh';
    case SI = 'si';
    case SK = 'sk';
    case SL = 'sl';
    case SM = 'sm';
    case SN = 'sn';
    case SO = 'so';
    case SQ = 'sq';
    case SR = 'sr';
    case SS = 'ss';
    case ST = 'st';
    case SU = 'su';
    case SV = 'sv';
    case SW = 'sw';
    case TA = 'ta';
    case TE = 'te';
    case TG = 'tg';
    case TH = 'th';
    case TI = 'ti';
    case TK = 'tk';
    case TL = 'tl';
    case TN = 'tn';
    case TO = 'to';
    case TR = 'tr';
    case TS = 'ts';
    case TT = 'tt';
    case TW = 'tw';
    case UK = 'uk';
    case UR = 'ur';
    case UZ = 'uz';
    case VI = 'vi';
    case VO = 'vo';
    case WO = 'wo';
    case XH = 'xh';
    case YO = 'yo';
    case ZH = 'zh';
    case ZU = 'zu';

    public static function key(): string
    {
        return 'languages';
    }
}
