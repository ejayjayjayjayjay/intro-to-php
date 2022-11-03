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

</body>
</html>