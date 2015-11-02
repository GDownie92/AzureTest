<?php
/**
 * Created by PhpStorm.
 * User: 1110074
 * Date: 26/10/2015
 * Time: 15:03
 */

function awardForCapture($specsOwned, $mugsOwned, $sausageRollsOwned)
{
    $award = 10 * (($specsOwned * $mugsOwned * $sausageRollsOwned)/2);
    return $award;
}

function printWantedBanner($name, $specsOwned, $mugsOwned, $sausageRollsOwned)
{
    echo "<p><strong>Wanted:</strong> ". $name . "</p>";
    echo "<p>Known to be in posession of:</p>";
    echo "<p>Specs: " . $specsOwned . "</p>";
    echo "<p>Mugs:" . $mugsOwned . "</p>";
    echo "<p>Sausage Rolls: " . $sausageRollsOwned . "</p>";
    echo "<p>Award for capture: " . awardForCapture($specsOwned,$mugsOwned,$sausageRollsOwned) . "</p>";

}

printWantedBanner("Mike",1,2,3);
printWantedBanner("John",3,4,5);


?>