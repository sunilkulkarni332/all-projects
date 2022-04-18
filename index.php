<?php

$a = 'Hello world';
echo '----'.$a;	
$temp1= array();
for($i=strlen($a);$i>=0;$i--){
 array_push($temp1,$a[$i]);
}
echo '<pre>';print_r($temp1);

function myStrRev($string){
$string_length = strlen($string); // finding string length
$reversed_string = ''; // store the reversed string
 
for($i=$string_length;$i>-1;$i--){ // iterating to reverse the string
$reversed_string .= $string{$i};
}
return $reversed_string;
?>