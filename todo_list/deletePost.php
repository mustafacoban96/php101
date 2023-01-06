<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "connection.php";
    $Gelen_postID = $_POST["postID"];
    $deleteQuery = "delete from yapılacak where post_id = '$Gelen_postID'";
    //
    $checkQuery = "select post_id from yapılacak";

    $execute = mysqli_query($conn, $checkQuery);

    while($row = mysqli_fetch_assoc($execute)){
        if($Gelen_postID == $row["post_id"]){
            $execute = mysqli_query($conn, $deleteQuery);
            header("Location:newDisplay.php");
            die();
        }
        else{
            
            header("Location:newDisplay.php?uyari=".urlencode("Lutfen gecerli deger giriniz."));
            
        }
    }





    

    
    
    
    
    
    
    ?>
</body>
</html>