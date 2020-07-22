<?php

namespace spec\Ubick\DS\Tree;

use PhpSpec\ObjectBehavior;
use Ubick\DS\Tree\Trie;

class TrieSpec extends ObjectBehavior
{
    function it_inserts_a_word()
    {
        $this->insert("ab");
        $this->insert("ac");

        print_r($this->getWrappedObject());
    }
}
