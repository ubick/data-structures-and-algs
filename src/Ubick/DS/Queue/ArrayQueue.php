<?php

namespace Ubick\DS\Queue;

class ArrayQueue
{
    private $elements = [];

    public function push($e) {
        $this->elements[] = $e;
    }

    public function pop() {
        if (count($this->elements) === 0) {
            return null;
        }

        $e = array_shift($this->elements);

        return $e;
    }

    public function isEmpty() {
        return count($this->elements) === 0;
    }
}
