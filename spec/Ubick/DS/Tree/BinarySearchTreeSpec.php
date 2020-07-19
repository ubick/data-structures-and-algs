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

    function it_traverses_in_order()
    {
        $values = [8, 3, 12, 5, 10, 15, 13];
        $tree = BinarySearchTree::fromList($values);
        $list = [];
        $tree->inOrder(function ($n) use (&$list) {
            $list[] = $n->value;
        });

        if ($list != [3, 5, 8, 10, 12, 13, 15]) {
            throw new \Exception("Lists did not match");
        }
    }

    function it_traverses_pre_order()
    {
        $values = [8, 3, 12, 5, 10, 15, 11];
        $tree = BinarySearchTree::fromList($values);
        $list = [];
        $tree->preOrder(function ($n) use (&$list) {
            $list[] = $n->value;
        });

        if ($list != [8, 3, 5, 12, 10, 11, 15]) {
            throw new \Exception("Lists did not match");
        }
    }

    function it_traverses_post_order()
    {
        $values = [8, 3, 12, 5, 10, 15, 11];
        $tree = BinarySearchTree::fromList($values);
        $list = [];

        $tree->postOrder(function ($n) use (&$list) {
            $list[] = $n->value;
        });

        if ($list != [5, 3, 11, 10, 15, 12, 8]) {
            throw new \Exception("Lists did not match");
        }
    }
}
