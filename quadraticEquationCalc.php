<?php
    // Statement of Arguments
    $a = 1;
    $b = 1;
    $c = -2;

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
        $formula = (($b ^ 2) - (4 * $a * $c));

        // Formula < 0
        if($formula < 0) {
            echo "The equation has no solutions";
        }
        else {
            // Formula = 0
            if($formula == 0) {
                $x = -$b / (2 * $a);
                $wynik = number_format($x, 2);
                echo "x = $x";
            }
            else {
                // Formula > 0
                $x1 = (-$b - sqrt($formula)) / (2*$a);
                $wynik1 = number_format($x1, 2);
                $x2 = (-$b + sqrt($formula)) / (2*$a);
                $wynik2 = number_format($x2, 2);
                echo "x1 = $wynik1 </br> x2 = $wynik2";
            }
        }
    }
?>