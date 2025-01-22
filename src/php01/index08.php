<?php
echo "array配列" . "</br>";
?>
<?php
$people = array("Taro", "Jiro", "Saburo");
var_dump($people);
echo "</br>" . $people[0];
?>
<?php
echo "</br>" . "</br>" . "array連想配列" . "</br>";
?>
<?php
$people = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo"
);
var_dump($people);
echo "/" . $people["person1"] . "(方法①)";
$people = [
    "person1" => "Taro",
    "person2" => "Jiro",
];
echo "</br>" . "/" . $people["person2"] . "(方法②)";
?>
<?php
echo "</br>" . "</br>" . "多次元配列" . "</br>";
?>
<?php
$people = [
    [
        "last_name" => "工藤",
        "first_name" => "新一",
        "age" => 18,
        "gender" => "男性"
    ],
    [
        "last_name" => "灰原",
        "first_name" => "哀",
        "age" => 8,
        "gender" => "女性"
    ],
    [
        "last_name" => "毛利",
        "first_name" => "蘭",
        "age" => 18,
        "gender" => "女性"
    ]
];
echo $people[1]["last_name"] . $people[1]["first_name"];
?>
<?php
echo "</br>" . "</br>" . "foreach文" . "</br>";
?>
<?php
$people = array("Taro","Jiro","Saburo");
foreach ($people as $person){
    echo $person;
    echo "</br>";
}
$people = array(
    "person1" => "Taro",
    "person2" => "Jiro",
    "person3" => "Saburo"
);
foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . "</br>";
}
?>
<?php
echo "</br>" . "</br>" . "課題" . "</br>";
?>
<?php
$people = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["hanako", 16, "women"]
];
foreach ($people as $person){
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "</br>";
}
?>