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

    public function remove($value)
    {
        if ($this->head === null) {
            return;
        }

        if ($this->head->getValue() === $value) {
            $this->head = $this->head->getNext();
            return;
        }

        $prev = $this->head;
        $node = $this->head->getNext();

        while ($node !== null) {
            if ($node->getValue() === $value) {
                $prev->setNext($node->getNext());
                return;
            }

            $prev = $node;
            $node = $node->getNext();
        }
    }

    public function reverse()
    {
        $this->reverseRec($this->head);
    }

    private function reverseRec(ListNode $n)
    {
        $next = $n->getNext();

        if ($next === null) {
            $this->head = $n;

            return $n;
        }

        $this->reverseRec($next)->setNext($n);
        $n->setNext(null);

        return $n;
    }
}
