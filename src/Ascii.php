<?php

namespace BFunky\Ascii;

class Ascii
{
    private static $charsMap = [
        'Š' => 'S',
        'š' => 's',
        'Ð' => 'Dj',
        'Ž' => 'Z',
        'ž' => 'z',
        'À' => 'A',
        'Á' => 'A',
        'Â' => 'A',
        'Ã' => 'A',
        'Ä' => 'A',
        'Å' => 'A',
        'Æ' => 'A',
        'Ç' => 'C',
        'È' => 'E',
        'É' => 'E',
        'Ê' => 'E',
        'Ë' => 'E',
        'Ì' => 'I',
        'Í' => 'I',
        'Î' => 'I',
        'Ï' => 'I',
        'Ñ' => 'N',
        'Ń' => 'N',
        'Ò' => 'O',
        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ö' => 'O',
        'Ø' => 'O',
        'Ù' => 'U',
        'Ú' => 'U',
        'Û' => 'U',
        'Ü' => 'U',
        'Ý' => 'Y',
        'Þ' => 'B',
        'ß' => 'Ss',
        'à' => 'a',
        'á' => 'a',
        'â' => 'a',
        'ã' => 'a',
        'ä' => 'a',
        'å' => 'a',
        'æ' => 'a',
        'ç' => 'c',
        'è' => 'e',
        'é' => 'e',
        'ê' => 'e',
        'ë' => 'e',
        'ì' => 'i',
        'í' => 'i',
        'î' => 'i',
        'ï' => 'i',
        'ð' => 'o',
        'ñ' => 'n',
        'ń' => 'n',
        'ò' => 'o',
        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ö' => 'o',
        'ø' => 'o',
        'ù' => 'u',
        'ú' => 'u',
        'û' => 'u',
        'ü' => 'u',
        'ý' => 'y',
        'þ' => 'b',
        'ÿ' => 'y',
        'ƒ' => 'f',
        'ă' => 'a',
        'ș' => 's',
        'ț' => 't',
        'Ă' => 'A',
        'Ș' => 'S',
        'Ț' => 'T',
    ];

    /**
     * @param string $stringToCheck
     * @return bool
     */
    public static function isValid(string $stringToCheck): bool
    {
        foreach (self::$charsMap as $key => $value) {
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
        return strtr($stringToTransliterate, self::$charsMap);
    }
}