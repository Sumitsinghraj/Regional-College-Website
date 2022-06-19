<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        this is my first php website
        <?php
        define(PI,3.14);
        echo "this is my website of php";
        $variable1=65;
        $variable2=65;
        echo $variable1;
        echo $variable2;
        echo "<br>";
        echo "variable1+variable2=";
        echo $variable1 + $variable2;
        
        echo "<br>";
        echo "variable1-variable2=";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "variable1*variable2=";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "variable1/variable2=";
        echo $variable1 / $variable2;
        $newvar=$variable1;
        $newvar+=1;
        echo "the new variable is=";
        echo $newvar;
        echo "<br>";
        echo "<h1>this is new website</h1>";
        echo "the value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "the value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "the value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "the value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo $variable1++;
        echo "<br>";
        echo $variable1;

        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        // $myvar=(true and true);
        $myvar=(true or false);
        echo var_dump($myvar);
        echo "<br>";
        $var="this is a string";
        echo var_dump($var);
        echo "<br>";
        $var2=true;
        echo var_dump($var2);
        echo "<br>";
        echo PI;

        ?>
        <?php
        // echo "this is my website of php again";
        ?>
    </div>
</body>
</html>