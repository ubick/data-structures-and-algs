<?php

namespace spec\Ubick\DS\LinkedList;

use PhpSpec\ObjectBehavior;
use Ubick\DS\LinkedList\SinglyLinkedList;

class SinglyLinkedListSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SinglyLinkedList::class);
    }
}
