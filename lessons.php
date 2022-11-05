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
    <hr/>

    <h3>Declare Variables for Examples Operators</h3>
    <h3>Assignment Operators</h3>

        <?php
            $num1 = 1;
            $num2 = 2;
            $sum;
        ?> 

    <h3>Arithmetic Operators</h3>    

        <?php
            $sum = $num1 + $num2;
            echo $sum;
            echo '<br>';
            $sum = $num1 - $num2;
            echo $sum;
            echo '<br>';
            $sum = $num1 * $num2;
            echo $sum;
            echo '<br>';
            $sum = $num1 / $num2;
            echo $sum;
            echo '<br>';
            $sum = $num1 % $num2;
            echo $sum;
        ?>
    <hr/>
    <h3>Compound Assignment with Arithmetic Operators</h3>
        <?php
            //AUGMENTED ADDITION = USING PLUS AND EQUAL IS THE SAME AS PLUS 1 AND 2 "CONSIDERED AS A SHORT HAND"
            $num1 += $num2;
            // THIS IS A LONG LINE OF INSTRUCTION FOR PLUS AND EQUAL
            $num1 = $num1 + $num2;

        ?>

        <?php

            $num1 = 1;
            $num2 = 2;
            $sum;
            $num1 += $num2;
            echo $num1;
            echo '<br>';
            $num1 = 1;
            $num2 = 2;
            $sum;
            $num1 = $num1 + $num2;
            echo $num1;
        ?>
        <hr/>

        <h2>PHP Operators</h2>
  <?php 
  $num1 == $num2;
  $num2 === $num2;
  $num1 != $num2;
  $num1 !== $num2;
  $num1 < $num2;
  $num1 <= $num2;
  $num1 > $num2;
  $num1 >= $num2;
  $num1 <=> $num2;
  ?>

  <hr />
  <?php
    $num1 = 1;
    $num2 = "2";
    $num1 == $num2;
    $num1 === $num2;
  ?>
<h3>Equality and Strict Equality Operators Example</h3>
<?php
    $num1 = 1;
    $num2 = "2";
    $num3 = "1";
    $num4 = 4;
    $num5 = "4";
    $num6 = 4;

    echo gettype($num1);
    echo "<br />";
    echo "<br />";
    echo gettype($num2);
    echo "<br />";
    echo "<br />";
    if ($num1 == $num3){
      echo "this is an example of equality operator";
    };
    echo "<br />";
    echo "<br />";
    echo gettype($num4);
    echo "<br />";
    echo "<br />";
    echo gettype($num5);
    echo "<br />";
    echo "<br />";

    /* if ($num4 === $num5){
      echo "this is an example of strict equality operator";
    }; */
    if ($num4 === $num6){
      echo "this is an example of strict equality operator";
    };
  ?>
<hr />
<h3>Not Equal and Strict Not Equal Operators Example</h3>
<?php
    $num1 = 1;
    $num2 = "2";
    $num3 = "1";
    $num4 = 4;
    $num5 = "4";
    $num6 = 4;

    echo gettype($num1);
    echo "<br />";
    echo "<br />";
    echo gettype($num2);
    echo "<br />";
    echo "<br />";
    if ($num1 != $num3){
      echo "this is an example of not equal to operator";
    };
    echo "<br />";
    echo "<br />";
    echo gettype($num4);
    echo "<br />";
    echo "<br />";
    echo gettype($num5);
    echo "<br />";
    echo "<br />";

    /* if ($num4 === $num5){
      echo "this is an example of strict equality operator";
    }; */
    if ($num4 !== $num5){
      echo "this is an example of not identical operator";
    };
  ?>
  <hr />
  <h3>Lessthan and Graterthan Operators Example</h3>
  <?php
    $num1 = 1;
    $num2 = 2;
    $num3 = 3;
    $num4 = 4;
    $num5 = 5;
    $num6 = 5;

    if ($num1 < $num2){
      echo "num1 is lessthan num2";
    };
    echo "<br />";
    echo "<br />";
    if ($num3 <= $num2){
      echo "num3 is lessthan or equal to num2";
    };
    echo "<br />";
    echo "<br />";
    if ($num5 >= $num6){
      echo "num5 is greaterthan or equal to num6";
    };
  ?>
  <hr />
  <h3>Spaceship Operator Example</h3>
  <?php
    $num1 = 1;
    $num2 = 2;
    $num3 = 2;
    //$num1 <=> $num2
      if ($num1 <=> $num2){
        print "if the one on the right greaterthan the number on the left they should return -1";
      };
        echo "<br />";
        echo "<br />";
        echo $num1 <=> $num2;
        echo "<br />";
        echo "<br />";
        print "if both numbers ate equal to one another";
        echo "<br />";
        echo "<br />";
        print ($num2 <=> $num2);
        echo "<br />";
        echo "<br />";
      if ($num2 <=> $num1){
        echo "if the number on the left is greaterthan the one on the right this should return 1";
      };
        echo "<br />";
        echo "<br />";
        echo $num2 <=> $num1;
  ?>
  <hr/>
  <h2>Logical Operators</h2>
  <h3>Logical AND &&</h3>
  <?php
    $num1 = 5;
    $num2 = 10;

      if($num1 === 5 AND $num2 === 10){
            echo "if both value are true display this paragraph";
      }
      echo "<br />";
      echo "<br />";
      if ($num1 ===5 && $num2 ===10) {
        echo "if both value are true display this paragraph";
        echo "<br>";
        echo "this is the shorthand version of logical AND operators";
      }
  ?>
  <hr/>
  <h3>Logical OR ||</h3>
  <?php
    $num1 = 5;
    $num2 = 10;

    if ($num1 === 5 or $num2 === 10){
        echo 'if one of the value are true display this paragraph';
    }
    echo "<br />";
    echo "<br />";
    if ($num1 === 1 || $num2 === 16){
        echo 'if one of the value are true display this paragraph';
        echo "<br />";
        echo "this is the shorthand version of OR operators";
    }
    ?>
    <hr/>
    <h3>Logical XOR</h3>
    <?php
      $num1 = 10;
      $num2 = 20;
      $num3 = 5;
      $num4 = 6;

      if($num1 === 10 xor $num2 === 5){
        $result1 = $num1 === 10 xor $num2 === 5;
        echo 'True xor false';
        echo '<br>';
        echo 'if one of this are true display this text!';
        echo '<br>';
        echo $result1 ? 'true':'false';
      }
      echo '<br>';
      echo '<br>';
      $result2 = $num3 === 5 xor $num4 === 6;
      /* echo 'true xor true';
      echo '<br>';
      echo 'if one of this is true display this text!';
      echo '<br>';
      echo $result2 ? 'true':'false';
      echo '<br>';
      var_dump($num3 === 5 xor $num4 === 6); */
      
      if($result2){
        echo 'true xor true';
        echo '<br>';
        echo 'if one of this is true display this text!';
        echo '<br>';
        echo $result2 ? 'true':'false';
        echo '<br>';
        var_dump($num3 === 5 xor $num4 === 6);
      }
    ?>

    <hr/>
    <h4>Logical !== NOT</h4>
    <h4>Not Equal</h4>
    <?php
      $num1 = 100;
      var_dump($num1 !== 60);
        echo '<br>';
        var_dump($num1);
    ?>
    <hr/>

    <h3>INCREMENT AND DECREMENT</h3>
    <?php 
  $num1 = 9;
  //++$num1; // this should output  10
  //$num1++;
  //var_dump($num1++); 
  echo  "<br>";
  var_dump(++$num1); 
?>

<h4>DECREMENTS</h4>
<?php 
  $num1 = 9;
  //++$num1; // this should output  10
  //$num1++;
  //var_dump($num1++); 
  echo  "<br>";
  var_dump(--$num1); 
?>


<hr>

<h3>String Operators</h3>
<?php
  $a = "My name is ";
  $b = "Rodrigo!";
  $c = $a . $b;
  echo  "<br>";
  echo $a;
  echo $b;
  echo  "<br>";
  echo  "<br>";
  echo $c;
  echo  "<br>";
  $d = 3;
  $e = 4;
  $f = $d . $e;
  echo $d;
  echo  "<br>";
  echo $e;
  echo  "<br>";
  echo $f;
?>

<hr>
<h1>CONTROL STRUCTURES</h1>

<h3>CONTROL STRUCTURES - if statements</h3>

<?php 
  /* if(condition){
        //Antyhing between the curly brackets are instrucitons to be run.
  } */

  echo "if(condition) {";
  echo "<br />";
  echo "<br/ >";
  echo "<br>";
  echo "}";
?>

<h3>If statement example 1 Declare variables and escape characters</h3>

<?php 
    echo "\$a = 5;";
    echo "<br>";
    echo "\$b = 5;";
?>

<h3>If statement example 2</h3>
<?php 

  $a = 5;
  $b  = 10;

  if($a === $b){
    echo "Variable as is the same value with variable b!";
  }

  echo "Awts! The text in the code block did not get displaye!!";
?>

<h3>Else statement example 3</h3>

<?php 
  $a = 5;
  $b = 10;

  if($a === $b){
    echo "Variable as is the same value with variable b!";
  } else {
    echo "The variables \$a and \$b are NOT THE SAME!";
  }
?>


<h3>ELSE IF statement example </h3>

<?php 
  $a = 5;
  $b = 10;
  $a = 10;

  if($a === $b){
    echo "Variable \$a is the same value with variable \$b!";
  } 
  elseif ($b === 5) {
    echo "The variables \$b is equal to 10";
  }
  else{
    echo "They are NOT THE SAME!";
  }
?>

<hr>

<h2>CONTROL STRUCTURE - SWITCH STATEMENTS</h2>

<?php
  $a = 100;
  switch($a) { // this is our condition 
    case 50: // this is the first value we check if it is true
      echo "Variable is equal to 50!"; // our code we want to display if the value is true.
      break; // We use this to add a break to our code when we write our switch cases.
    case 100:
      echo "Variable is equal to 100!";
      break;
    default: // This isthe same feature as the else statement
      echo "Did not find the equal value and none of this cases were true!";

  } // This is the end of one SWITCH STATEMENT

?>

<h3>Switch example 2 - When we are checking for a boolean it is better to use if,else, else if statement</h3>

<?php 
  $a = true;
  if($a === true){
    echo "Variable is true!";
  }
  elseif($a === false){
    echo "Varioable is false!";
  }
?>

<hr>

<h2>Loops</h2>

<?php 
  $a = 20;
  $b = 20;

  if($a === $b){
    echo "these values are the same!";
  } 
  
  echo "<br>";

?>

<h3>WHILE LOOPS example 1 and test the + operator for incrementing</h3>


<?php 
  $a = 0;
  $b = 20;

  while($a <$b){
    //echo $a++;
    // echo "<br>";
    // echo "Keep looping this! " . $a++;
    echo "Keep looping this!";
    echo "<br>";
    $a++;
  
  }
  

?>
<hr>
<h3> INFINITE LOOPS - <span style="color:red;">BAD!!!</span></h3>


<?php 
  
    echo "while(true === true){";
    echo "<br>";
    echo "echo 'This will  continue FOREVER!! '";
    echo "<br>";
    
  "}"
?>
<hr>

<h3>WHILE LOOPS 2</h3>

<?php 
  $a = 1;
  while ($a <= 5){
      echo "Loop number" . $a++;
      echo "<br>";
  }
?>

<hr>

<h3>DO WHILE LOOP</h3>

<?php 
  do {
    echo "Loop number " . $a++;
    echo "<br />";
  } while ($a<=10);
?>

<hr>

<h3>FOR LOOPS</h3>

<?php 
  for($i = 0; $i < 10; $i++){
    echo "This should run 10 time!";
    echo "<br />";
  }
?>

<hr/>

<h3>FOR EACH LOOP example</h3>

<?php
  $array = ['ejay', 'lebron', 'wade'];

  foreach($array as $value){
      echo $value;
      echo '<br>';
  }

?>

<hr/>

<h3>FOR EACH LOOP example2</h3>

<?php
  $array = [

    'First Name' => 'Josell',
    'Last Name' => 'Vibar',
    'Eye color' => 'black',

  ];

  foreach($array as $key => $value){
    echo $key . ': ' . $value;
    echo '<br/>';
  }

?>

<hr/>

<h2>Break and Continue Statements</h2>
<h3>Example 1</h3>

<?php

  $a = 1; //declare and initialize a variable

  while($a <= 10){ //start of the while loop statement
      if($a === 5){ //nested if conditional statement
        break; // break statement when we reach 5
      }
      echo $a++;
      echo '<br/>';
  }

?>

<h3>Example 2</h3>

  <?php
    $a = 1;

    while ($a++){ //start of the while loop
      echo $a; // THIS WILL BECOME AN INFINITE LOOP IF WE DONT SET A CONDITION
      while($a >= 10){
      break 2; // this will crash our browser if we set this to 1
    }
  }
  ?>

  <h3>Continue Statement</h3>

  <?php
    $a = 1;

    while($a < 10){ //start of the while loop statement
      $a++;
      if($a === 5){ //nested if conditional statement
        continue; // break statement when we reach 5
      }
      echo $a;
      echo '<br/>';
  }
    
  ?>

  <hr/>

  <h2> INCLUDE AND REQUIRE </h2>
  
  
  <?php

    /* 
    ways to include files in a document in php
    include
    include_once
    require
    require_once
    
    */


    include 'testVariable.php';
    echo 'we are accessing the value from the testVariable.php ' . $a;

  ?>


















</body>
</html>