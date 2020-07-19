<?php

namespace Ubick\DS\Tree;

use Ubick\DS\Queue\ArrayQueue;

class BinarySearchTree
{
    private ?TreeNode $root = null;

    public function getRoot(): ?TreeNode {
        return $this->root;
    }

    public static function fromList(array $values = []): self
    {
        $instance = new self();

        foreach ($values as $val) {
            $instance->insert($val);
        }

        return $instance;
    }

    public function insert($value) {
        if (!$this->root) {
            $this->root = new TreeNode($value);
        } else {
            $this->root->insert($value);
        }
    }

    public function inOrder(callable $f) {
        if ($this->root) {
            $this->root->inOrder($f);
        }
    }

    public function preOrder(callable $f) {
        if ($this->root) {
            $this->root->preOrder($f);
        }
    }

    public function postOrder(callable $f) {
        if ($this->root) {
            $this->root->postOrder($f);
        }
    }

    public function asArray(): array {
        $queue = new ArrayQueue();
        $list = [];

        if (!$this->root) {
            return [];
        }

        $queue->push($this->root);

        while (!$queue->isEmpty()) {
            $current = $queue->pop();
            $list[] = $current->value;

            if ($current->left) {
                $queue->push($current->left);
            }

            if ($current->right) {
                $queue->push($current->right);
            }
        }

        return $list;
    }
}
