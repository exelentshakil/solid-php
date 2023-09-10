# SOLID Principles in PHP 🚀

This project demonstrates the SOLID principles using PHP in a simple bakery management system. Each principle is illustrated with code examples for better understanding.

## SOLID Principles 🤖

### Single Responsibility Principle (SRP) 🎯

Each class has one job, just like a baker in a bakery.

### Open/Closed Principle (OCP) 🌟

The system is open for adding new menu items and oven types without changing existing code.

### Liskov Substitution Principle (LSP) 🧩

Subclasses like `ElectricOven` and `GasOven` can be used interchangeably with their base class `Oven`.

### Interface Segregation Principle (ISP) 🌐

Interfaces like `BreadCustomer` and `CakeCustomer` are specific to customer needs.

### Dependency Inversion Principle (DIP) 🌐

High-level modules like `Bakery` depend on abstractions (e.g., `Menu` and `Oven` interfaces), while low-level modules (e.g., `Menu` and `Oven` implementations) depend on these abstractions.

## Usage 🍰

Instantiate and use bakery components in your PHP code.

```php
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


```
