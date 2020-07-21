<?php

namespace spec\Ubick\DS\Heap;

use PhpSpec\ObjectBehavior;
use Ubick\DS\Heap\MinHeap;

class MinHeapSpec extends ObjectBehavior
{
    function it_returns_the_min_value() {
        $this->insert(5);
        $this->insert(7);
        $this->insert(9);
        $this->insert(13);
        $this->insert(2);

        $this->min()->shouldBeLike(2);
    }

    function it_returns_the_min_value_after_removing_the_top() {
        $this->insert(5);
        $this->insert(7);
        $this->insert(9);
        $this->insert(13);
        $this->insert(2);
        $this->pop();
        $this->pop();

        $this->min()->shouldBeLike(7);
    }

    function it_builds_a_heap_from_array() {
        $this->beConstructedFromArray([2,5,7,9,13]);

        $this->min()->shouldBeLike(2);
    }
}
