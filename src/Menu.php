<?php
namespace Exelentshakil\SolidPhp;

class Menu {
    private $items = [];

    public function addItem($itemName) {
        $this->items[] = $itemName;
    }

    public function getItem($itemName) {
        if (in_array($itemName, $this->items)) {
            return $itemName;
        } else {
            return null;
        }
    }
}
