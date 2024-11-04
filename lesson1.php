<?php
$result=79;
$grade="A-";
echo "The result is ".$result." with grade ".$grade."<br>";
if($result>=50){
    echo "The result is ".$result." is pass"."<br>";
}
else{
    echo "The result is ".$result." is fail"."<br>";
}
for($a=1;$a<5;$a++){
    echo "The number is".$a."<br>";
}
$car=array("Volvo","BMW","Toyota");
echo "I like ".$car[0].", ".$car[1]." and ".$car[2].".<br>";

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is ".$age['Peter']." years old."."<br>";

$cars=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",14,9)
);
echo $cars[0][0]." in stock: ".$cars[0][1]." sold: ".$cars[0][2]."<br>";
echo $cars[1][0]." in stock: ".$cars[1][1]." sold: ".$cars[1][2]."<br>";
echo $cars[2][0]." in stock: ".$cars[2][1]." sold: ".$cars[2][2]."<br>";

?>