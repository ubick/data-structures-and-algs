<?php

namespace spec\Ubick\DS\Sorting;

use PhpSpec\ObjectBehavior;
use Ubick\DS\Sorting\HeapSort;

class HeapSortSpec extends ObjectBehavior
{
    function it_sorts_a_list_of_numbers()
    {
        $list = [5, 3, 8, 2, 1, 10, 6];

        $this->sort($list)->shouldBeLike([1, 2, 3, 5, 6, 8, 10]);
    }
}
