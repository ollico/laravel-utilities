<?php

namespace Ollico\Utilities\Tests;

use Ollico\Utilities\Validation\RequiredIfInArray;
use Orchestra\Testbench\TestCase;

class RequiredIfInArrayTest extends TestCase
{
    /** @test */
    public function it_returns_the_valid_rules()
    {
        $rules = (new RequiredIfInArray(['value'], 'value'))->__toString();
        $this->assertEquals('required', $rules);

        $rules = (new RequiredIfInArray(['not_value'], 'value'))->__toString();
        $this->assertEquals('', $rules);

        $rules = (new RequiredIfInArray([null], 'value'))->__toString();
        $this->assertEquals('', $rules);

        $rules = (new RequiredIfInArray([''], 'value'))->__toString();
        $this->assertEquals('', $rules);

        $rules = (new RequiredIfInArray([], 'value'))->__toString();
        $this->assertEquals('', $rules);
    }
}
