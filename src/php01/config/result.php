<?php
$name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$select = htmlspecialchars($_POST["select"],ENT_QUOTES);
$sel_num = htmlspecialchars($_POST["sel_num"],ENT_QUOTES);
print "私の名前は、" . $name;
echo "</br>";
print "ご注文の商品は、" . $select;
echo "</br>";
print "注文数は、" . $sel_num;
?>