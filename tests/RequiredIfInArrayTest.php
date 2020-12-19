<?php

namespace Ollico\Utilities\Tests;

use Ollico\Utilities\Validation\RequiredIfInArray;
use Orchestra\Testbench\TestCase;

class RequiredIfInArrayTest extends TestCase
{
    /** @test */
    public function it_returns_the_valid_rules()
    {
        $rules = (new RequiredIfInArray(['foo' => ['value']], 'foo', 'value'))->__toString();
        $this->assertEquals('required', $rules);

        $rules = (new RequiredIfInArray(['foo' => ['not_value']], 'foo', 'value'))->__toString();
        $this->assertEquals('', $rules);

        $rules = (new RequiredIfInArray(['foo' => null], 'foo', 'value'))->__toString();
        $this->assertEquals('', $rules);

        $rules = (new RequiredIfInArray(['foo' => ['']], 'foo', 'value'))->__toString();
        $this->assertEquals('', $rules);
    }
}
