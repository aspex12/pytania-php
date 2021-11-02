<?php
//1.
$test = 'Nazywam się Janek';

//2.
//integer
$wiek = 20;
//float
$proporcja = 3.14;
//string
$imie = 'Maciek';
//array 
$imiona = array('Kuba','Oskar','Kacper');

//3.
echo "wyswietlam wartosc na stronie";

//4.
$ciagznakow1 = 'Ala ma';
$ciagznakow2 = 'kota';
$zdanie = $ciagznakow1 . $ciagznakow2;

echo $zdanie;

//5.
$isAuthorized = true;
$isClicked = true;
if ($isClicked=true and $isAuthorized=true){
  echo "operacja udana";
} else {
      echo "operacja nieudana";
  }

//6.
$isAuthorized1 = true;
$isClicked1 = true;
if ($isClicked1=true xor $isAuzthorized1=true){
  echo "operacja udana";
}
  else{
      echo "operacja nieudana";
  }

//7.

$wartosc = [
    'favAnimal' => 'żółw',
    'favFood' => 'pizza',
    'favMovie' => 'The Room',
   ];
   

//8.

	foreach($wartosc as $k => $v ){
    echo $k , $v;
  }

//9.

$a="To jest test";
$b=$a[4];
echo $b;

