<?php

namespace BFunky\Test\Ascii;

use BFunky\Ascii\Ascii;
use PHPUnit\Framework\TestCase;

class AsciiTest extends TestCase
{

    public function testIsValidReturnsTrueUsingStaticCall()
    {
        $this->assertTrue(Ascii::isValid('this string is valid'));
    }

    public function testIsValidReturnsFalseUsingStaticCall()
    {
        $this->assertFalse(Ascii::isValid('cette chaîne est valide'));
    }

    public function testTransliterateUsingStaticCall()
    {
        $this->assertEquals('traducira cualquier texto', Ascii::transliterate('traducirá cualquier texto'));
    }

    public function testIsValidReturnsTrueCreatingInstance()
    {
        $ascii = new Ascii();
        $this->assertTrue($ascii->isValid('this string is valid'));
    }

    public function testIsValidReturnsFalseCreatingInstance()
    {
        $ascii = new Ascii();
        $this->assertFalse($ascii->isValid('cette chaîne est valide'));
    }

    public function testTransliterateCreatingInstance()
    {
        $ascii = new Ascii();
        $this->assertEquals('traducira cualquier texto', $ascii->transliterate('traducirá cualquier texto'));
    }
}
