<?php
function text($num1, $num2)
{
    $value = $num1 * $num2;
    return $value;
}
$value = text(1,5);
echo $value . "</br>";
?>
<?php
function score($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if($total>210){
        echo "合格点は" . $total . "点なので合格です" . "</br>";
    } else {
        echo "合計点は" . $total . "点なので不合格です" . "</br>";
    }
}
echo (score(80, 70, 50));
?>
<?php
function findTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function findSquareArea($base, $height)
{
    return $base * $height;
}
function findTrapezoid($topBase, $bottomBase, $height)
{
    return ($topBase + $bottomBase)* $height /2;
}
echo findTriangleArea(5,6) . "</br>";
echo findSquareArea(5,6) . "</br>";
echo findTrapezoid(5,6,4) . "</br>";
?>
