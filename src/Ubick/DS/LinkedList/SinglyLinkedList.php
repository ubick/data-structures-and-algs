<?php

namespace Ubick\DS\LinkedList;

class SinglyLinkedList
{
    private $head = null;

    public function insert($value)
    {
        $newNode = new ListNode($value);

        if ($this->head === null) {
            $this->head = $newNode;

            return;
        }

        $node = $this->head;

        while ($node->getNext() !== null) {
            $node = $node->getNext();
        }

        $node->setNext($newNode);
    }

    public function traverse(callable $f) {
        $node = $this->head;

        while ($node !== null) {
            $f($node);
            $node = $node->getNext();
        }
    }

    public function asArray(): array {
        $arr = [];

        $this->traverse(function(ListNode $n) use (&$arr) {
            $arr[] = $n->getValue();
        });

        return $arr;
    }
}
