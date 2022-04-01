<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>

    </form> -->
    <?php
// $name ="Lucky";
// echo $name ." is a great programmer";
// echo strlen("hi Lucky");


// Data types

//String
$name ="coding is fun";

//Integer 
$age =10;
//float
$price =20.4567;
//Boolean
//true = 1
//false = 0

//Arrays
$names = array("Lucky", "Kamau", "Daniel");
echo $names['0'] ."<br>";

//Operators
//arithmetic operators

echo 5+5 ."<br>";
echo 5-5 ."<br>";
echo 5*5 ."<br>";
echo 5/5 ."<br>";
echo 5%5 ."<br>"; //Modulus

//Asignment Operators
//$x= 50 ."<br>"; 
////$x = $x +20; //long method
//
//echo $x /= 20 ."<br>";
//echo $x += 20 ."<br>";
//echo $x -= 20 ."<br>";

//Comparison Operators

//$x =10;
//$y =10;
//
//  
//
//if ($x >= $y){
//    echo "True!";
//}
//else{
//    echo"False!";
//}
    //Increment/Decrement Operators
//    $x =10;
//    
//    echo $x++;
//    echo $x;
//     echo --$x;
//    echo $x;
    
//    $x =10;
//    $y =20;
//    if ($x ==$y && 2 == 2){
//        echo "True" ."<br>";
//    }
//   
//    if ($x ==$y || 1 == 1){
//        echo "True";
//    }
//    
    //Conditional Statements
//    $x =16;
//    
//    if($x < 18){
//        echo"You cant vote!";
//    }
//    elseif($x = 18){
//     echo"u can vote";   
//    }
    
//   Switch Statement
     $x ="R";
    switch($x){
        case 1:
            echo "This is 1";
            break;
            
            case "Lucky":
            echo "The name is Lucky";
            break;
            
            
        case "Red":
            echo "The color is Red";
            break;
        default:
            echo"Invalid Answer!";
    }
    
?>

    <table>

    </table>
</body>

</html>
