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

    function it_removes_a_node_by_value()
    {
        $this->insert(7);
        $this->insert(2);
        $this->insert(1);
        $this->insert(3);
        $this->remove(1);

        $this->asArray()->shouldBeLike([7, 2, 3]);
    }

    function it_removes_the_head()
    {
        $this->insert(7);
        $this->insert(2);
        $this->insert(1);
        $this->remove(7);

        $this->asArray()->shouldBeLike([2, 1]);
    }

    function it_removes_the_last_value()
    {
        $this->insert(7);
        $this->insert(2);
        $this->insert(1);
        $this->remove(1);

        $this->asArray()->shouldBeLike([7, 2]);
    }

    function it_reverses_all_nodes() {
        $this->insert(7);
        $this->insert(2);
        $this->insert(1);
        $this->insert(5);
        $this->reverse();

        $this->asArray()->shouldBeLike([5, 1, 2, 7]);
    }
}
