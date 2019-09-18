<?php

/**
 * Created by PhpStorm.
 * User: Serhii
 * Date: 09.05.2018
 * Time: 23:29
 */
class Tree
{
    private $root = null;

    /**
     * @param mixed $root
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    /**
     * @return Node
     */
    public function getRoot(): ?Node
    {
        return $this->root;
    }


    /**
     * Вывод дерева
     * @param Tree $tree
     */
    public function showTree(Tree $tree):void
    {
        echo '<pre>';
        print_r($tree);
        echo '<pre>';
        $this->show($tree->getRoot(), 0);
        return;
    }

    /**
     * @param Node $node
     * @param int $tab
     */
    private function show(Node $node, int $tab):void
    {
        echo str_repeat('-', $tab) . '<b>' . $node->getValue() . '</b><br>';
        $tab += 10;
        foreach ($node->getChildren() as $treeBranch => $value) {
            echo str_repeat('-', $tab) . '<u>' . $treeBranch . '</u> --><br> ';
            if (is_object($value)) {
                $this->show($value, $tab);
            } else {
                echo str_repeat('-', $tab) . '<i style="color:red">' . $value . '</i><br>';
            }
        }
        return;
    }
}