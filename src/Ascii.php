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
        return (!self::existsTransliterableChars($stringToCheck));
    }

    /**
     * @return bool
     */
    private static function existsTransliterableChars(string $stringToCheck): bool
    {
        return !preg_match('@^[a-zA-Z0-9\s\p{P}\p{S}]+$@u', $stringToCheck);
    }

    /**
     * @param string $stringToTransliterate
     * @return string
     */
    public static function transliterate(string $stringToTransliterate): string
    {
        $transliterated = strtr($stringToTransliterate, AsciiCorrelation::MAPPED_VALUES);
        if (self::isValid($transliterated)) {
            return $transliterated;
        }
        throw new \Exception('Error on transliterate ' . $stringToTransliterate);
    }
}
