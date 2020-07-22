<?php

namespace Ubick\DS\Tree;

class Trie
{
    private TrieNode $root;

    public function __construct() {
        $this->root = new TrieNode();
    }

    public function insert(string $word)
    {
        $current = $this->root;

        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];

            if (!$current->get($char)) {
                $new = new TrieNode();
                $current->set($char, $new);
                $current->setComplete(false);
                $current = $new;
            } else {
                $current = $current->get($char);
            }
        }
    }
}
