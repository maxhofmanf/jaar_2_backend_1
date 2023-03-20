<?php
echo "opdracht 3a <br>";
$random_1 = rand(1,100);
$random_2 = rand(1,100);

echo "$random_1 + $random_2 = ". ($random_1+$random_2). "<br>";
echo "$random_1 x $random_2 = ". ($random_1*$random_2). "<br>";
echo "$random_1 / $random_2 = ". ($random_1/$random_2). "<br>";
echo "$random_1 - $random_2 = ". ($random_1-$random_2). "<br>";

echo"<br>";
echo "opdracht 3b part 1/2<br>";
function ziek($i,$zess){
    echo $i * $zess . "<br>";
}
for ($i=1; $i <= 10; $i++){
    ziek($i,6);
}
echo"<br>";
echo "opdracht 3b part 3<br>";
$nummers = [3,5,8,12];
function opdracht3b($nummer){
    echo"tafel van {$nummer}<br>";
    for($i=1; $i <=10; $i++){
    echo $i * $nummer . "<br>";
    }
    echo"<br>";

}
foreach($nummers as $nummer){
    opdracht3b($nummer);
}