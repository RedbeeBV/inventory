<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LinkRouterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LinkRouter');
    }
}
