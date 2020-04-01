<?php

namespace Ollico\Utilities\Tests;

use Ollico\Utilities\Sanitizer;
use Orchestra\Testbench\TestCase;

class SanitizerTest extends TestCase
{
    /** @test */
    function it_can_sanitize_phone_numbers()
    {
        $this->assertEquals('01234567890', Sanitizer::phone('01234 567890'));
        $this->assertEquals('01234567890', Sanitizer::phone('+0044 1234 567 890'));
    }

    /** @test */
    function it_can_sanitize_postcodes()
    {
        $this->assertEquals('G1234E', Sanitizer::postcode('G12 34E'));
        $this->assertEquals('GB1234E', Sanitizer::postcode(' GB12 34E '));
    }

    /** @test */
    function it_can_sanitize_emails()
    {
        $this->assertEquals('johnwsmith@gmail.com', Sanitizer::email('JohnWSmith@Gmail.com'));
    }
}
