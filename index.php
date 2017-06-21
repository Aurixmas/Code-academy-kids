<?php

$x='man';
$y='america';
$z='princes';
$n='five'; 
function printsentence ($x, $y, $z, $n)
{

	$sentence = $x . '[tekstas]' . $y . '[tekstas]' . $z . '[tekstas]'. $n .'[tekstas]';

   return $sentence;  
}

echo printsentence($x, $y, $z, $n);
echo '<br>';
$x= 14;
$nn= 7;
function dogAge($x, $nn)
{
	$age = $x * $nn;
	$sentence = 'if your dog age ' . $x . ' when in human years he is '  . $age . ' old.';
	return $sentence;
}

echo dogAge($x, $nn);
echo'<br>';


$x= 66;
$n= 720;

function amountPerAge($x, $n)
{
  $amount = $x * $n;
  $sentence = 'his age is ' . $x . 'he has drinks in a year ' . $n . 'then his in all his life drink' . $amount . 'times';
   return $sentence;
}
echo amountPerAge ($x, $n);