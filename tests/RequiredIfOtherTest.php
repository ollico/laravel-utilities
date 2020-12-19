<?php

namespace Ollico\Utilities\Tests;

use Ollico\Utilities\Validation\RequiredIfOther;
use Orchestra\Testbench\TestCase;

class RequiredIfOtherTest extends TestCase
{
    /** @test */
    public function it_can_sanitize_phone_numbers()
    {
        $rules = RequiredIfOther::make(['foo' => 'other'], 'foo')->__toString();
        $this->assertEquals('nullable|string|max:5000|required_if:foo,other', $rules);

        $rules = RequiredIfOther::make(['foo' => 'other'], 'foo')->otherValue('other_value')->__toString();
        $this->assertEquals('nullable|string|max:5000|required_if:foo,other_value', $rules);
        
        $rules = RequiredIfOther::make(['foo' => null], 'foo')->__toString();
        $this->assertEquals('nullable|string|max:5000|required_if:foo,other', $rules);

        $rules = RequiredIfOther::make(['foo' => null], 'foo')->inArray()->__toString();
        $this->assertEquals('nullable|string|max:5000|', $rules);

        $rules = RequiredIfOther::make(['foo' => ['other']], 'foo')->inArray()->__toString();
        $this->assertEquals('nullable|string|max:5000|required', $rules);

        $rules = RequiredIfOther::make(['foo' => ['other_value']], 'foo')->inArray()->otherValue('other_value')->__toString();
        $this->assertEquals('nullable|string|max:5000|required', $rules);
    }
}
