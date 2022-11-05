<?php
    function calculationFunction($num1, $operations, $num2){
        $sum;
        switch ($operations){
            case "add":
                $sum = $num1 + $num2;
                break;
            case "subtract":
                $sum = $num1 - $num2;
                break;
            default:
                $sum = "Output ERROR";
        }

        return $sum;
    }

    $num1 = $_GET["num1"];
    $operations = $_GET["operations"];
    $num2 = $_GET["num2"];

    echo "Calculated Value:" . calculationFunction($num1, $operations, $num2);

?>