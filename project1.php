<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1</title>
</head>
<body>
<form action="project1.php" method= "post">
Student:<input type="textbox" value="manu"><br>

<input type=submit value="Submit">


</form>
<br/>
<?php
// Asscocative arrays, are like map object, since they have key value pairs.
$apples = array("JJ"=>"A+","Kim"=>"B-", "Jim"=>"C+");  // Key is the fruit and Value is variety of apple
echo $apples["JJ"]."<br>";   // Accessing using key
?>

</body>
</html>