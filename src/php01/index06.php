<?php
echo "</br>" . "for練習" . "</br>";
?>
<?php
for($i=1; $i<=5; $i++){
    echo $i*2 . "</br>";
}
?>
<?php
echo "</br>" . "while練習" . "</br>";
?>
<?php
$count=0;
while($count<20){
    $count += 1;
    echo $count . '<br/>';
}
?>
<?php
echo "</br>" . "while-break,continue練習" . "</br>";
?>
<?php
$count=0;
while($count<100){
    if($count%3 == 0){
        $count++;
        continue;
    }
    if($count==20){
        break;
    }
    echo $count . "</br>";
    $count++;
}
?>
<?php
echo "</br>" . "do-while練習" . "</br>";
?>
<?php
$num=0;
do{
    echo 'num = ' . $num . '</br>';
    $num++;
}while($num<3);
?>
<?php
echo "</br>" . "for, if練習" . "</br>";
?>
<?php
$Fizz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";
for($num=1; $num<=50; $num++){
    if($num %15 == 0){
        echo 'FizzBuzz' . '</br>';
    }
    elseif($num %3 == 0){
        echo 'Fizz' . '</br>';
    }
    elseif($num %5 == 0){
        echo 'Buzz' . '</br>';
    }
    else{
        echo $num . "</br>";
    }
}
?>
<?php
echo "</br>" . "課題" . "</br>";
?>
<?php
for($i=1; $i<6; $i++){
    for($g=1; $g<6; $g++){
        echo "⚫︎";
    }
    echo "</br>";
}
?>