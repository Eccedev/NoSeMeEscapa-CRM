<?php

namespace Illuminate\Support {
    if (!function_exists('Illuminate\Support\extension_loaded')) {
        function extension_loaded($name)
        {
            if ($name === 'intl')
                return true;
            return \extension_loaded($name);
        }
    }
}

namespace Filament\Support {
    if (!function_exists('Filament\Support\extension_loaded')) {
        function extension_loaded($name)
        {
            if ($name === 'intl')
                return true;
            return \extension_loaded($name);
        }
    }
}

namespace {
    if (!class_exists('NumberFormatter')) {
        class NumberFormatter
        {
            const DECIMAL = 1;
            const CURRENCY = 2;
            const PERCENT = 3;
            const SCIENTIFIC = 4;
            const SPELLOUT = 5;
            const ORDINAL = 6;
            const DURATION = 7;
            const PATTERN_RULEBASED = 8;
            const IGNORE = 9;
            const DEFAULT_STYLE = 1;

            const FRACTION_DIGITS = 8;
            const MAX_FRACTION_DIGITS = 6;
            const TYPE_DOUBLE = 1;
            const TYPE_INT32 = 2;
            const DEFAULT_RULESET = 0;

            public function __construct($locale, $style, $pattern = "")
            {
            }
            public function setAttribute($attr, $value)
            {
                return true;
            }
            public function setTextAttribute($attr, $value)
            {
                return true;
            }
            public function format($value, $type = null)
            {
                return (string) $value;
            }
            public function formatCurrency($value, $currency)
            {
                return $currency . ' ' . number_format($value, 2);
            }
            public function parse($string, $type = null, &$offset = null)
            {
                return (float) $string;
            }
        }
    }
}
