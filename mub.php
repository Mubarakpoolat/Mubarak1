<?php
function generatePrimes($maxNumber): void{
    echo"Prime number up to $maxNumber:";
    for ($number=2;$i<=$maxNumber;$number++){
        $isPrime=true;
        for($i=2;$i<=sqrt(num: $number);$i++){
        if ($number % $i==0){
            $isPrime=false;
            break;
        }
    }`
    if($isPrime){
        echo $number."";
    }
}
echo"<br>";
}
function fibonacciSeries($numTerms): void{
    $first=0;
    $second=1;

    echo"Fibonacci series ($numTerms terms):";
    for($i=0;$i<$numTerms;$i++){
        echo $first ."";
        $next=$first+$second;
        $first=$second;
        $second=$next;
    }
    echo"<br>";
}

generatePrimes(maxNumber: 50);
fibonacciSeries( numTerms: 10);

?>