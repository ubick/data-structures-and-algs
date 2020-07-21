<?php

namespace spec\Ubick\DS\Heap;

use PhpSpec\ObjectBehavior;
use Ubick\DS\Heap\MaxHeap;

class MaxHeapSpec extends ObjectBehavior
{
    function it_returns_the_max_value() {
        $this->insert(5);
        $this->insert(7);
        $this->insert(9);
        $this->insert(13);
        $this->insert(2);

        $this->max()->shouldBeLike(13);
    }

    function it_returns_the_max_value_after_removing_the_top() {
        $this->insert(5);
        $this->insert(7);
        $this->insert(9);
        $this->insert(13);
        $this->insert(2);
        $this->pop();
        $this->pop();

        $this->max()->shouldBeLike(7);
    }
}
