<!DOCTYPE html>
<html>
<head>
    <title>quadraticEquationCalc</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<style>
* {
    font-family: Calibri;
}
</style>
    <h2>Quadratic Equation Calculator</h2>
    <form method="POST">
        <p>Input quadratic equation here:</p>
        <input type="text" name="a" style="width: 40px;"><b><i>x</i><sup>2</sup></b> + 
        <input type="text" name="b" style="width: 40px;"> <b><i>x</i></b> + 
        <input type="text" name="c" style="width: 40px;">
        <input type="submit" name="submit" value="Submit" style="width: 100px;">
    </form></br>
</body>
</html>

<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit'])) {
    // Statement of Arguments
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    echo "<b>Parameters of the equation:</b> </br>";
    echo "a = $a </br>";
    echo "b = $b </br>";
    echo "c = $c </br>";
    echo "</br> <b>Answer:</b> </br>";

    if($a == 0) {
        echo "This is not a quadratic equation";
    }
    else {
        // Calculate Formula
        $formula = (($b ** 2) - (4 * $a * $c));

        // Formula < 0
        if($formula < 0) {
            echo "Δ = $formula </br> The equation has no solutions";
        }
        else {
            // Formula = 0
            if($formula == 0) {
                $x = -$b / (2 * $a);
                $result = number_format($x, 0);
                echo "Δ = $formula </br> x = $result";
            }
            else {
                // Formula > 0
                $x1 = (-$b - sqrt($formula)) / (2*$a);
                $result1 = number_format($x1, 0);
                $x2 = (-$b + sqrt($formula)) / (2*$a);
                $result2 = number_format($x2, 0);
                echo "Δ = $formula </br> x1 = $result1 </br> x2 = $result2";
            }
        }
    }
}
?>