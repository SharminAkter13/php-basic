<?php
require "chocolate.php";
require "drinks.php";
require "foods.php";
require "snacks.php";

use ChocolateList\User;
use DrinkList\Car;
use FoodList\User2;
use SnackList\User2;


$object = new Car();
$object->info();
echo "<br>";
$obj = new User();
$obj->show();
echo "<br>";
$ob = new User2();
$ob->display();