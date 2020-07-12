<?php

namespace spec\Ubick\DS\LinkedList;

use PhpSpec\ObjectBehavior;
use Ubick\DS\LinkedList\SinglyLinkedList;
use Ubick\DS\LinkedList\ListNode;

class SinglyLinkedListSpec extends ObjectBehavior
{
    function it_returns_a_list_with_one_node()
    {
        $this->insert(7);

        $this->asArray()->shouldBeLike([7]);
    }

    function it_returns_a_list_with_multiple_node()
    {
        $this->insert(7);
        $this->insert(2);

        $this->asArray()->shouldBeLike([7, 2]);
    }
}
