<?php

namespace Ubick\DS\Tree;

class TrieNode
{
    private $map = [];
    private $isCompleteWord = true;

    public function set($char, TrieNode $node) {
        $this->map[$char] = $node;
    }

    public function get($char): ?TrieNode {
        return $this->map[$char] ?? null;
    }

    public function setComplete(bool $complete) {
        $this->isCompleteWord = $complete;
    }
}
