<?php


// $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
// ksort($fruits);
// // foreach ($fruits as $key => $val) {
// //     echo "$key = $val\n";
// // }

$coba=array('6','8','7','6','9');
// $coba=array('6','8','7','6','9');

$inp=array('0.4','0.6','0.7','0.2','0.2');
$vcx=array_filter($coba);

// $gabung=array_combine($inp,$coba);

// foreach($coba as $key => $value) {
// 	    if(empty($value)) 
//         unset($coba[$key]);
// }  
// foreach($coba as $key => $value){          
//     echo ($coba[$key] . "<br>"); 
// }

$gabung=array_combine($inp,$vcx);

ksort($gabung);

echo $gabung[0];
// print_r($gabung) ;	



	// foreach ($gabung as $key => $val) {
	//     echo "$key = $val\n| ";
	// }
?>