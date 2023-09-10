<?php

use Exelentshakil\SolidPhp\Bakery;
use Exelentshakil\SolidPhp\Menu;
use Exelentshakil\SolidPhp\Oven;
use PHPUnit\Framework\TestCase;

class BakeryTest extends TestCase {
    public function testBakeItemSuccessfully() {
        $menu = new Menu();
        $menu->addItem("Bread");

        $oven = new Oven();

        $bakery = new Bakery($menu, $oven);

        $result = $bakery->bakeItem("Bread");
        $this->assertEquals("Baking Bread in the oven...", $result);
    }

    public function testBakeItemNotFoundInMenu() {
        $menu = new Menu();
        $menu->addItem("Bread");

        $oven = new Oven();

        $bakery = new Bakery($menu, $oven);

        $result = $bakery->bakeItem("Cake");
        $this->assertEquals("Item not found in the menu.", $result);
    }
}
