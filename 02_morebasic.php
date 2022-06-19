<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color:grey;
        margin:auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>let's learn about php</h1>
        <p>your party status is here</p>
        <?php
        $age=7;
        if($age>18){
            echo "you can go to the party";
        }
        else if($age==7){
            echo "you are 7 year old";
        }
        else{
            echo "you can not go to the party";
            
        }
        $lang=array("python","c++","java","javascript");;
        echo count($lang);
        $a=0;
        while ($a < count($lang)) {
            echo "the value of a is=";
            echo $lang[$a];
            echo "<br>";
            $a++;
        }
        $a=20;
        do{
            echo "the value of a is=";
            echo $a;
            echo "<br>";
            $a++;
        }while ($a <= 10);
       
        for ($a=0; $a < 20; $a++) { 
            echo "<br>the value of a is=";
            echo $a;
        }
        foreach($lang as $value){
            echo "<br>the value is ";
            echo $value;
        }
        function print5(){
            echo "Five";
        }
        print5();
        function print_number($number){
            echo "your number is=";
            echo $number;
            
        }
        print_number(45);
        ?>
    </div>
</body>
</html>