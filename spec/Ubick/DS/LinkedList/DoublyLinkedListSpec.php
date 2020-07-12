<?php

namespace spec\Ubick\DS\LinkedList;

use PhpSpec\ObjectBehavior;
use Ubick\DS\LinkedList\DoublyLinkedList;

class DoublyLinkedListSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DoublyLinkedList::class);
    }
}
