<?php
namespace BFunky\Test\Ascii;

use BFunky\Ascii\Ascii;
use PHPUnit\Framework\TestCase;

class AsciiTest extends TestCase
{

    public function testIsValidReturnsTrue()
    {
        $this->assertTrue(Ascii::isValid('this string is valid'));
    }

    public function testIsValidReturnsFalse()
    {
        $this->assertFalse(Ascii::isValid('cette chaîne est valide'));
    }

    public function testTransliterate()
    {
        $this->assertEquals('traducira cualquier texto', Ascii::transliterate('traducirá cualquier texto'));
    }
}
