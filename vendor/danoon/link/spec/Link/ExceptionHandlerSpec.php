<?php

namespace spec\Link;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExceptionHandlerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Link\ExceptionHandler');
    }
}
