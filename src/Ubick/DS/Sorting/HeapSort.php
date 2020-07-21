<?php

namespace Ubick\DS\Sorting;

use Ubick\DS\Heap\MinHeap;

class HeapSort
{
    public function sort(array $list): array
    {
        $sorted = [];
        $heap = MinHeap::fromArray($list);

        while ($heap->size()) {
            $sorted[] = $heap->min();
            $heap->pop();
        }

        return $sorted;
    }
}
