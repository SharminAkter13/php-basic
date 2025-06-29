<?php
require "chocolate.php";
require "drinks.php";
require "foods.php";
require "snacks.php";

use DrinkList\Drinks,FoodList\Foods,SnackList\Snacks,ChocolateList\Foods as Chocolate;

echo "<h3>NameSpace Example</h3>";

$objf = new Foods();
$objf->flist();
echo "<br>";
echo "<br>";
$objc = new Chocolate();
$objc->clist();
echo "<br>";
echo "<br>";
$objd = new Drinks();
$objd->dlist();
echo "<br>";
echo "<br>";
$objs = new Snacks();
$objs->slist();