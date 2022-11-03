<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to php</title>
</head>
<body>
    <h1>Intro to Php</h1>
    <h2>10 primitive types</h2>
    <h2>Scalar</h2>
    <ul>
        <li>String</li>
        <li>Integer</li>
        <li>Float</li>
        <li>Boolean</li>
    </ul>
    
    <h2>Compound</h2>
    <ul>
        <li>Array</li>
        <li>Object</li>
        <li>Callable</li>
        <li>Iterable</li>
    </ul>

    <h2>Special</h2>
    <ul>
        <li>Resource</li>
        <li>Null</li>
    </ul>
    <h2>Pseudo Types</h2>
    <hr />

    <h2>Strings</h2>
    <h3>Double Quotes</h3>
    <p>"This is a string data type in Php"</p>
    <h3>Single Quotes</h3>
    <p>'This is a string data type in Php'</p>
    <p>"SELECT person WHERE name = 'Ejay'"</p>

    <?php
        //INCORRECT
        //echo 'I'm Learning to work with strings in Php';

        //CORRECT
        echo 'I\'m learning how to work strings in Php.';
    ?>
    <hr/>

    <h2>Integers</h2>
    <?php

        echo 20;
        echo '<br>';
        echo "10";

    ?>

    <p><strong>"10" !== 10</strong></p>

    <?php

        if("10" !== 10){
            echo "not the same data type!";
        }

    ?>
    <hr/>
    <h2>Floats</h2>
    <?php
        echo 20.5;
        echo '<br>';
        echo 38.35;
        echo '<br>';
        echo 1384.35274;
    ?>

    <h3>PHP Float Data Type</h3>
    <p>20.5</p>
    <h3>C# Float Data Type</h3>
    <p>20.5f</p>

    <hr/>
    <h2>Adding Line Breaks</h2>
    <?php
        echo "if you view the page source \n then you will fine a new line in a string";
        echo '<br>';
        echo nl2br("you will fine the \n new line in this string \r\n on the browser window");
    ?>
    <hr/>
    <h3>Boolean</h3>
    <ul>
        <li>True</li>
        <li>False</li>
    </ul>

    <?php 
        $a = true; //declaring variable in PHP is using $ "Dollar Sign"
        if($a === true){
            echo 'variable $a is true';
        }
    ?>

    <hr/>

    <h2>Variable</h2>
    <?php
        $myName = 'Ejay';
        $myAge = 28;
        $dota = true;
        $myFLoat = 5.5;
    ?>

    <h3>Two Parts of a Variable</h3>
    <?php
        //declaring a variable in
        $myName;
        //Initializing a value in a variable
        $myName = 'Ejay';
    ?>
    <hr/>
    <h3>Php Constants in Variable</h3>
    <?php
        CONST PI = 3.14;
        CONST BALL_WIDTH = 5;
        CONST BALL_HEIGHT = 5;
        echo PI;
        echo '<br>';
        echo BALL_HEIGHT;
        echo '<br>';
        echo BALL_WIDTH;
    ?>

    <hr/>
    <h2>Expressions & Operators</h2>
    <ul>
        <li>Arithmetic Operators</li>
        <li>Assignment Operators</li>
        <li>Comparison Operators</li>
        <li>Increment & Decrement Operators</li>
        <li>Logical Operators</li>
        <li>String Operators</li>
        <li>Array Operators</li>
        <li>Conditional Assigntment Operators</li>
        <li>precedence operators</li>
        <li>Error Control Operators</li>
        <li>Execution Control Operators</li>
        <li>Type Operators</li>
        <li>Bitwise Operators</li>
    </ul>



</body>
</html>