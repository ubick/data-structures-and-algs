<?php

namespace spec\Ubick\DS\LinkedList;

use PhpSpec\ObjectBehavior;
use Ubick\DS\LinkedList\ListNode;

class ListNodeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ListNode::class);
    }
}
