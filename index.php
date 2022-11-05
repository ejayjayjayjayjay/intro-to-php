<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Homepage</title>
</head>
<body>
    
    <h1>Homepage</h1>
    <p>Hi this is a paragraph content inside a Php Element.</p>
    <?php 
        echo "This is my Homepage";
        echo "Hello World, I'm Ejay";
        echo "This is the 2nd paragraph printed out inside the php script tags.";
        echo "<p>This is the <strong>3rd Paragraph</strong> that got displayed inside a paragraph element inside of an echo statement. </P>";
    ?>

    <section>
        <h2>INCLUDE statement example</h2>
        <?php
            include 'testVariable.php';
            echo 'i will get the variable in testVariable.php ' . $a;
            echo '<br>';
            echo $a;
            echo '<br>';
            echo $b;
            echo '<br>';
            echo $c;
            echo '<br>';
            echo $d;
            include 'includes/test.php';
        ?>
    </section>

    <section>
        <h2>FUNCTIONS</h2>
        <h3>Example 1: user defined function displayMessage()</h3>
        <?php
            function displayMessage() {
                echo 'Hello World! this is a display message thath got printed out using displayMessage function inside of PHP';
            }

            displayMessage();

        ?>

        <h3>Example 1: built in function str_replace()</h3>

            <?php
                $a = 'Hello mundo!';
                echo $a;
                echo '<br/>';

                // echo str_replace()

                echo str_replace('world', 'ejay!', $a);

            ?>

            <h3>Example 2: Built in function str_repeat()</h3>
            
            <?php
                $a = 'hi!';
                echo $a;
                echo '<br>';
                
                // echo str_repeat
                $greeting = 'ejay,';
                echo str_repeat($greeting, 3);
                echo '<br>';

            ?>

            <h3>Example 3: built in function strpos()</h3>
                <?php
                $a = 'Hello World!!!';
                // $char = 'he';
                $char = 'll';
                // $char = 'lo';
                // $char = '';
                // $char = 'wo';

                echo strpos($a, $char);
                
                ?>


            <h3>Calculate Add</h3>

            <?php
            
                function calculateAdd($num1, $num2){
                    $add = $num1 + $num2;
                    return $add;
                }

                echo calculateAdd(2, 4);
            
            ?>

    </section>

    <!-- JS BUNDLE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>