<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
echo "my first php script";
$a=15;
$b=15;
echo "<br>";
echo $a+$b;
echo "<br>";
echo strlen("my first php script");
echo "<br>";
echo str_word_count("my first php script");
echo "<br>";
echo strrev("my first php script");
echo "<br>";
echo strpos("my first php script","php");
echo "<br>";
echo str_replace("my","your","my first php script");
echo "<br>";
$ab=1234.9321;
$ab_cast=(int)$ab;
echo "<br>";
echo $ab_cast;

echo var_dump($a);

echo "<br>";
echo (rand());

echo "<br>";
echo (rand(1,100));

echo "<br>";
define ("QWE", "qwer rewq");
echo QWE;

echo "<br>";
echo 2**10;
echo "<br>";
$c=$a<=>$b;
echo $c;


echo "<br>";
$d="qwerty";
$e="uiop";
$f=$d.$e;
echo $f;
echo "<br>";

$t = date("H");

if ($t < "20" and $t>"9") {
  echo "Have a good day!";
} elseif($t==21) {
  echo "Have a good evening!";
}else{
	echo"Have a good night";
}
echo "<br>";
echo "Well done !";

$x = 1;


while($x <= 7) {
 echo"<br>";
 echo "x=: $x ";
  $x++;
}

echo"<br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

echo"<br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
echo"<br>";

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

function writeNumbers(){
	
	for($i=0;$i<10;$i++){
	
	echo"liczba to:$i <br>";
	}
		
}

echo"<br>";
writeNumbers();


function writeN($liczba){
	
	for($i=0;$i<$liczba;$i++){
	
	echo"wartosc to:$i <br>";
	}
		
}
echo"<br>";
writeN(15);


echo"<br>";

$WrongQ = array();
// assign some values
for($i = 0; $i < 5; $i++)
{
	$x=rand(1,10);
    $WrongQ[$i] =  $x;
	echo $WrongQ[$i] . "<br/>";
}































?>

</body>
</html>