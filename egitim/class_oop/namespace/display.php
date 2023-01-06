<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php



include("mustafa.php");
//include("musa.php");

$name = $_POST["name"];
$surname = $_POST["surname"];
$job = $_POST["job"];

$firstP = new Mustafaoz\Personal($name,$surname,$job);
//$secondP = new Musaoz\Personal;
echo "******************"."<br>";
echo $firstP->get_name()."<br>";
echo "******************" . "<br>";
echo $firstP->get_surname()."<br>";
echo "******************"."<br>";
echo $firstP->get_job();
echo "<br>";


?>

<a href="displayForm.php">go back the form</a>




</body>
</html>