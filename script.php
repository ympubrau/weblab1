<?php
$x = (float)htmlspecialchars($_POST["Xform"]);
$y = (float)htmlspecialchars($_POST["yForm"]);
$r = (float)htmlspecialchars($_POST["rForm"]);

$x1 = "X = $x";
$y1 = "Y = $y";
$r1 = "R = $r";

$str = "";

if(((($x^2 + $y^2) <= $r) && $x >= 0 && $y >= 0) || ($x <= $r && $x >=0 && $y <=0 && $y >= -$r) || (countTriangle($x,$y,$r) && $x <= 0 && $x >= -$r)) {
    $str = "Точка входит в область";
}
else $str = "Точка не входит в область";


require_once('index.html');

function countTriangle($x, $y, $r){
    return($y <= -$x + $r);
}