<?php

namespace Ubick\DS\Tree;

class TreeNode
{
    public $value;
    public ?TreeNode $left = null;
    public ?TreeNode $right = null;

    public function __construct($value) {
        $this->value = $value;
    }

    public function insert($value) {
        if ($value < $this->value) {
            if ($this->left) {
                $this->left->insert($value);
            } else {
                $this->left = new self($value);
            }
        } elseif ($value > $this->value) {
            if ($this->right) {
                $this->right->insert($value);
            } else {
                $this->right = new self($value);
            }
        }
    }

    public function inOrder(callable $f) {
        if ($this->left) {
            $this->left->inOrder($f);
        }

        $f($this);

        if ($this->right) {
            $this->right->inOrder($f);
        }
    }

    public function preOrder(callable $f) {
        $f($this);

        if ($this->left) {
            $this->left->preOrder($f);
        }

        if ($this->right) {
            $this->right->preOrder($f);
        }
    }

    public function postOrder(callable $f) {
        if ($this->left) {
            $this->left->postOrder($f);
        }

        if ($this->right) {
            $this->right->postOrder($f);
        }

        $f($this);

    }
}
