<?php

namespace Ollico\Utilities\Tests;

use Orchestra\Testbench\TestCase;
use Ollico\Utilities\Validation\RequiredIfInArray;

class RequiredIfInArrayTest extends TestCase
{
    /** @test */
    public function it_can_sanitize_phone_numbers()
    {
        $rules = (new RequiredIfInArray(['foo' => ['value']], 'foo', 'value'))->__toString();
        $this->assertEquals('required', $rules);

        $rules = (new RequiredIfInArray(['foo' => ['not_value']], 'foo', 'value'))->__toString();
        $this->assertEquals('', $rules);
    }

}
