<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1</title>
</head>
<body>
<!-- <form action="project1.php" method= "post">
Student:<input type="textbox" name="student" ><br>

<input type=submit value="Submit">


</form> -->
<br/>
<?php
//functions in php

function sayHi( $name, $age=6 ) {
 echo  "Hello," .$name. "!" ,"You are $age"; 

}
sayHi("John");
echo "<br>";
sayHi("Jack",9);
echo "<br>";
sayHi("Grace",8);
echo "<br>";
sayHi("Drake",7);
echo "<br>";
?>

</body>
</html>