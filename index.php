<?php
    $x=5;    // global scope

    echo "1st Variable x outside fx()=$x";        // 1st reference to $x
    echo "<br>";

    function fx() {
        echo "2nd Variable x inside fx()=$x";    // 2nd reference to $x
        $x=10;
        echo "3rd Variable x inside fx()=$x";    // 3rd reference to $x
        echo "<br>";
    }
    fx();

    echo "4th Variable x outside fx()=$x";        // 4th reference to $x
    echo "<br>";

    function gx() {
        global $x;
        echo "5th Variable x inside gx()=$x";    // 5th reference to $x
    }
    gx();
?>