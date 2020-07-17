<?php
function printhoge()
{
    echo "hoge";
}
printhoge();

function printNum($num) 
{
    echo $num;
}
	
printNum(4);

function printKuku($num) {
    for ($i = 1; $i <= 9; $i++) {
        echo $num * $i;
	echo '<br>';
    }
}
	
printKuku(4);

function printIsEven($num) {
    if ($num % 2 === 0) {
        echo "偶数です";
    } else {
	echo "奇数です";
    }
}
	
printIsEven(3);

function printMessage($str, $count) {
    for ($i = 1; $i < $count; $i++) {
        echo $str;
        echo '<br>';
     }
}
	
printMessage("ABC", 3);

for($i =0; $i <= 3; $i++){
    echo 'Hello';
}




// function printMaxNum($num1, $num2) {
//     if ($num1 > $num2) {
//         echo $num1;
//     } elseif ($num1 < $num2) {
//         echo $num2;
//     } else {
//         echo '同じ';
//     }
// }
	
// printMaxNum(4, 5);

// function getSquared($num) {
//     return $num * $num;
// }
	
//     $result = getSquared(4);
//     echo $result;

//     function createSelfIntroductionText($name) {
//         $msg = '私の名前は' . $name . 'です';
//         return $msg;
//     }
        
//     $message = createSelfIntroductionText("NexSeed");
//     echo $message;

//     function isEvenNumber($num) {
//         if ($num % 2 == 0) {
//             return true;
//         } else {
//         return false;
//         }
//     }
        
//     $result = isEvenNumber(3);
//     var_dump($result);

//     function isSeedKun($str) {
//         if ($str == "SeedKun") {
//             return true;
//         } else {
//         return false;
//         }
//      }
        
//      $result = isSeedKun("SeedKun");
//     var_dump($result);

