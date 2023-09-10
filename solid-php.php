<?php

// Instantiate the components

use Exelentshakil\SolidPhp\Bakery;
use Exelentshakil\SolidPhp\Menu;
use Exelentshakil\SolidPhp\Oven;

$menu = new Menu();
$menu->addItem("Bread");
$menu->addItem("Cake");

$oven = new Oven();

$bakery = new Bakery($menu, $oven);

// Bake a bread
echo $bakery->bakeItem("Bread"); // Output: Baking Bread in the oven...

// Try to bake a pie (not in the menu)
echo $bakery->bakeItem("Pie"); // Output: Item not found in the menu.
