<?php

$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;

echo "<br><br>";

$arr = array(
	'0' => 'z1',
	'1' => 'Z10',
	'2' => 'z12',
	'3' => 'Z2',
	'4' => 'z3',
);

asort($arr, SORT_FLAG_CASE|SORT_STRING|SORT_NATURAL);

echo "<pre>";
var_dump($arr);


//echo implode(', ', $arr);

//$s[$s[1]] = $s[1]+$s[3];
//print_r($s);
echo "<br><hr size=1 width=100% color=black>";  
die("END TEST");

class number {
       public $a= 10;
      public $b=20;
      private $c=30;
}
    $numbers = new number();
 
    var_dump($numbers);
 
     foreach($numbers as $var => $value) {
       echo "$value ";
   }

die();




function magic($p, $q)
{  
     return ($q == 0)    ? $p    : magic($q, $p % $q);
}

echo magic(4, 10);

die("TEST 01");


function modifyArray (&$array) 
{
    foreach ($array as &$value)
    {
         $value = $value + 2; 
    } 
    $value = $value + 3; 
 } 
$array = array (1, 2, 3); 
modifyArray($array); 
print_r($array);

die("end");




function makeRange($length) {
    for ($i = 0; $i < $length; $i++) {
        yield $i;
    }
}

foreach (makeRange(10) as $i) {
    echo $i . PHP_EOL;
}
