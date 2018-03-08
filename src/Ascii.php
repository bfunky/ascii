<?php

namespace BFunky\Ascii;

class Ascii
{
    /**
     * @param string $stringToCheck
     * @return bool
     */
    public static function isValid(string $stringToCheck): bool
    {
        foreach (AsciiCorrelation::MAPPED_VALUES as $key => $value) {
            if (strpos($stringToCheck, $key) !== false) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param string $stringToTransliterate
     * @return string
     */
    public static function transliterate(string $stringToTransliterate): string
    {
        return strtr($stringToTransliterate, AsciiCorrelation::MAPPED_VALUES);
    }
}