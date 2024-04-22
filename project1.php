<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1</title>
</head>
<body>
<form action="project1.php" method= "post">
APPLE:<input type="checkbox" name="fruits[]" value="apple"><br>
Mango:<input type="checkbox" name="fruits[]" value="mango"><br>
Passion:<input type="checkbox" name="fruits[]" value="passion"><br>
Orange:<input type="checkbox" name="fruits[]" value="orange"><br>
<input type=submit value="Submit">


</form>
<br/>
<?php
$friends= array('God', 'Jesus'); 
 echo "My Friends: $friends[0]";    
 $friends[6] = "James";
echo count( $friends);  

$fruitsArray= $_POST["fruits"];   
echo $fruitsArray[0];   
?>

</body>
</html>