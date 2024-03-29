<?php
/**
 * Created by PhpStorm.
 * User: Serhii
 * Date: 08.05.2018
 * Time: 16:13
 */
declare(strict_types = 1);
include_once 'vendor/autoload.php';
$testData = include_once 'loadData.php';

$algorithm = new Algorithm($testData);
$tree = new Tree();
$builtTree = $algorithm->makeTree($tree);
$tree->showTree($builtTree);