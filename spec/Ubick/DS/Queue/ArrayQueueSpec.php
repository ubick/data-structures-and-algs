<?php

namespace spec\Ubick\DS\Queue;

use PhpSpec\ObjectBehavior;
use Ubick\DS\Queue\ArrayQueue;

class ArrayQueueSpec extends ObjectBehavior
{
    function it_fetches_elements_in_order_of_addition()
    {
        $this->push(5);
        $this->push(3);
        $this->push(8);

        $this->pop()->shouldBe(5);
        $this->pop()->shouldBe(3);
        $this->pop()->shouldBe(8);
        $this->pop()->shouldBe(null);
    }
}
