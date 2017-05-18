<?php
$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);
 
$faces = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);


$deck = array();
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

$test = array_slice($deck,26);

var_dump($test);


die();



$word = "abba-ilLL";

$reverse = strrev(strtolower($word)); // reverse the word
if ($word == $reverse) {
  echo "YES";
}
else {
    echo "NO";
}

die();


    $num = $str[0];
    $square = array();


    for ($i = 1; $i < $num+1; $i++) {
      $line_element = explode(" ", $str[$i]);
      foreach ($line_element as $element) {
      	$square[$i][] = $element;
      }
    }

    
   

	$diag1 = 0;
	for ($r=0, $c=0; $r<$k; $r++, $c++) {
    	$diag1 += $square[$r][$c];
	}
	$totals[] = $diag1;  // append to array

	$diag2 = 0;
	for ($r=0, $c=$k-1; $r<$k; $r++, $c--) {
    	$diag2 += $square[$r][$c];
	}
	$totals[] = $diag2;  // append to array



	//use the following command to print the output to console
	//echo 'Hello World!';
	echo count($totals);

die();


 $arr = array(34,54,67,68,141,151,161,141,54,151,54);
 
 function GetUniqueOnes($arr)
 {
     return implode(",", array_unique($arr));
 }
 
         
 
 echo GetUniqueOnes($arr);
        

die();



class Product { 
    private $name; 
    
    private $price; 
    
    public function Product($name, $price) { $this->name = $name; $price = $this->price; } 
    
    protected function setName($name) { 
        return $this->name = ($name == $this->name); 
    } 
    
    protected function setPrice($price) { 
        return $price = $this->price = $price; 
    } 
    
    final public function ShowNameAndPrice () { 
        echo "This product is called {$this->name} and costs {$this->price} USD.";         
        } 
    } 


/*please write the code logic, excluding the <?php?> tags*/
class Fixedproduct extends Product 
{
  private $name;
    
  public function __construct($name, $price) 
  {
      parent::__construct($name, $price);
    $this->setName($name);
    $this->setPrice($price);
  }
 
  protected function setName($name) 
  {
      return $this->name = $name;
      
  }
  
}


$prod = new Fixedproduct("a book", "19.99");

$prod->ShowNameAndPrice();




die();


 $arr = array(array(141,151,161), 2, 3, array(101, 202, array(303,404)));
 
 
function MaxArray($arr){
 if(!is_array($arr[0])) {
    $maxVal = $arr[0];
 }
 
    foreach ($arr as $value) {
        if (is_array($value)) {
            $value = MaxArray($value);   
        }  
    
        if ($maxVal < $value) {
            $maxVal = $value;
        }
    }
    
    return $maxVal;
}

echo  MaxArray($arr);

//var_dump($test);

echo "<br><hr>";
die();



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
