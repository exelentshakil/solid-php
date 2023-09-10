<?php
namespace Exelentshakil\SolidPhp;

class Bakery {
    private $menu;
    private $oven;

    public function __construct(Menu $menu, Oven $oven) {
        $this->menu = $menu;
        $this->oven = $oven;
    }

    public function bakeItem($itemName) {
        $item = $this->menu->getItem($itemName);
        if ($item) {
            $this->oven->bake($item);
            return "Baking $itemName...";
        } else {
            return "Item not found in the menu.";
        }
    }
}
