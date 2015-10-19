<?php
/**
 * Created by PhpStorm.
 * User: 1110074
 * Date: 19/10/2015
 * Time: 15:30
 */

$wantedgood = "mugs";

switch ($wantedgood) {
    case "specs":
        echo "You have to be 16 to buy specs.";
        break;
    case "mugs":
        echo "You have to be 18 to buy mugs.";
        break;
    case "sausage rolls":
        echo "You have to be 21 to buy sausage rolls.";
        break;
}
