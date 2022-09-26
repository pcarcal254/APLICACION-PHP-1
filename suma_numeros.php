<?php
    if (isset($_GET['a']) and isset($_GET['b'])) {
        if ($_GET['simbolo'] == "mas") {
            $c = $_GET['a'] + $_GET['b'];
            echo "<h1>RESULTADO: $c</h1>";
        } else {
            $c = $_GET['a'] - $_GET['b'];
            echo "<h1>RESULTADO: $c</h1>";
        }
    } elseif (empty($_GET['a'])) {
        echo "<h1>EL VALOR A ESTA VACIO</h1>";
    } elseif (empty($_GET['b'])) {
        echo "<h1>EL VALOR B ESTA VACIO</h1>";
    }
?>

