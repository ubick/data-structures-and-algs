<?php

namespace Ubick\DS\Heap;

class MinHeap
{
    private $list = [];

    public static function fromArray(array $array)
    {
        $instance = new self();

        $instance->list = $array;

        for ($i = floor(count($array) / 2 - 1); $i >= 0; $i--) {
            $instance->heapify($i);
        }
        
        return $instance;
    }

    public function insert($val)
    {
        $idx = count($this->list);
        $this->list[] = $val;
        
        $parentIdx = floor(($idx - 1) / 2);

        while ($parentIdx >= 0 && $this->list[$parentIdx] > $val) {
            $this->swap($idx, $parentIdx);

            $idx = $parentIdx;
            $parentIdx = floor(($idx - 1) / 2);
        }
    }

    private function swap($idx, $parentIdx) {
        $tmp = $this->list[$parentIdx];
        $this->list[$parentIdx] = $this->list[$idx];
        $this->list[$idx] = $tmp;
    }

    public function min()
    {
        return $this->list[0];
    }

    public function heapify($idx) {
        $left = $idx * 2 + 1;
        $right = $idx * 2 + 2;
        $largest = $idx;

        if ($left < count($this->list) && $this->list[$left] < $this->list[$largest]) {
            $largest = $left;
        }

        if ($right < count($this->list) && $this->list[$right] < $this->list[$largest]) {
            $largest = $right;
        }

        if ($largest != $idx) {
            $this->swap($idx, $largest);
            $this->heapify($largest);
        }
    }

    public function pop()
    {
        $this->swap(0, count($this->list) - 1);
        array_pop($this->list);

        $this->heapify(0);
    }

    public function size() {
        return count($this->list);
    }
}
