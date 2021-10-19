<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day 7 - Loop</title>
</head>

<body>
    <?php
    // Question 1, Exercise 1
    $n = 5;
    echo "Question 1, Exercise 1";
    for ($i = 0; $i <= $n; $i++) {
        echo " ";
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";
    //Question 1, Exercise 2
    echo "Question 1, Exercise 2";
    for ($i = 0; $i <= $n; $i++) {
        echo " ";
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    for ($i = 0; $i <= $n; $i++) {
        echo " ";
        for ($j = $i; $j < $n; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    //Question 2
    $num = 30;
    $sum = 0;
    echo "Question 2 <br>";
    for ($i = 0; $i <= $num; $i++) {
        $sum += $i;
    }
    echo "Total sum integers from 0 to " . $num . " is " . $sum;
    echo "<br>";
    echo "<br>";
    //Question 3
    echo "Question 3 <br>";
    $sumOdd = 0;
    for ($i = 30; $i <= 50; $i++) {
        if ($i % 2 !== 0) {
            $sumOdd += $i;
        }
    }
    echo "Total sum of odd numbers between 30 & 50 is " . $sumOdd;
    echo "<br>";
    echo "<br>";
    //Question 4
    echo "Question 4 <br>";
    $text = "Hello there my name is Kevin.";
    echo "Original Text is " . $text;
    echo "<br>";
    $newText = str_replace(" ", "%", $text);
    echo "New Text is = " . $newText;
    echo "<br>";
    $strArr = count_chars($newText, 1);

    foreach ($strArr as $key => $value) {
        if ($key = 37) {
            echo "The character " . chr(37) . " was found $value times";
            break;
        }
    }
    ?>
</body>

</html>