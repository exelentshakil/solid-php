<?php
use Exelentshakil\SolidPhp\Bakery;
use Exelentshakil\SolidPhp\Menu;
use Exelentshakil\SolidPhp\Oven;
use PHPUnit\Framework\TestCase;

class OvenTest extends TestCase {
    public function testBakeItem() {
        $oven = new Oven();

        $result = $oven->bake("Bread");
        $this->assertEquals("Baking Bread in the oven...", $result);
    }
}
