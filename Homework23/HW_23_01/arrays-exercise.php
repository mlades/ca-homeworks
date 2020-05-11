<?php
echo "Exercise 1<br>";
$arrayOne = array( 0, 1, 2, 3, 4 );
echo $arrayOne[3]."<br>";


echo "<br>Exercise 2<br>";
$arrayTwo = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo $arrayTwo["three"]."<br>";


echo "<br>Exercise 3<br>";
$arrayThree = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo $arrayThree[1][1][0]."<br>";


echo "<br>Exercise 4<br>";
$arrayFour = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo $arrayFour["b"]["o"]["b"]."<br>";


echo "<br>Exercise 5<br>";
$stringFive = "a,b,c,d,e,f";
$arrayFive = explode("," ,$stringFive);
var_dump($arrayFive);


echo "<br>Exercise 6<br>";
$stringSix = "a,b,c,d,e,f";
$arraySix = explode("," ,$stringSix);
foreach($arraySix as $value){
    $rezultSix[$value] = $value;
}
var_dump($rezultSix);


echo "<br>Exercise 7<br>";
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$first=[];
$second=[];
foreach ($keys as $key => $value){   
    array_push($first,$value); 
}
foreach ($values as $key => $value){   
    array_push($second,$value); 
}
$keysAndValues = array_combine($first, $second);
var_dump($keysAndValues);

echo "<br>Exercise 8<br>";
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);
foreach($transactions as $transaction){
    $transaction["amount"] = abs($transaction["debit"] - $transaction["credit"]); 
    $temp[] = $transaction;
}
$transactions = $temp;
var_dump($transactions);

echo "<br>Exercise 9<br>";
$arrayNine = array( 0, 1, 2, 3, 4, 5, 6 );
$sum = 0;
foreach($arrayNine as $value) {
    $sum += $value;
}
echo "The sum is ".$sum;
?>