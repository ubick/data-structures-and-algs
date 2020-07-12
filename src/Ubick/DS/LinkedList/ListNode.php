<?php

namespace Ubick\DS\LinkedList;

class ListNode
{
    private $value;
    private $next = null;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function setNext(ListNode $node) {
        $this->next = $node;
    }

    public function getNext(): ?ListNode {
        return $this->next;
    }
}
