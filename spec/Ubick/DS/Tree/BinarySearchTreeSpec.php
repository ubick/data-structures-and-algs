<?php

namespace spec\Ubick\DS\Tree;

use PhpSpec\ObjectBehavior;
use Ubick\DS\Tree\BinarySearchTree;
use Ubick\DS\Tree\TreeNode;

class BinarySearchTreeSpec extends ObjectBehavior
{
    function it_inserts_elements_by_value_order()
    {
        $this->insert(5);
        $this->insert(3);
        $this->insert(6);

        $this->asArray()->shouldBeLike([5, 3, 6]);
    }

    function it_builds_a_tree_from_array_of_values()
    {
        $values = [8, 3, 12, 5, 10, 15, 13];
        $this::beConstructedFromList($values);

        $this->asArray()->shouldBeLike($values);
    }
}
