<?php
use Exelentshakil\SolidPhp\Bakery;
use Exelentshakil\SolidPhp\Menu;
use Exelentshakil\SolidPhp\Oven;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase {
    public function testAddItemToMenu() {
        $menu = new Menu();
        $menu->addItem("Bread");

        $item = $menu->getItem("Bread");
        $this->assertEquals("Bread", $item);
    }

    public function testGetNonExistentItem() {
        $menu = new Menu();

        $item = $menu->getItem("Cake");
        $this->assertNull($item);
    }
}
