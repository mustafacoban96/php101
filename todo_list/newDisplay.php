
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

    if(!isset($_SESSION["user_id"])||empty($_SESSION["user_id"])){
        header("Location:loginForm.php?aMessage=".urlencode("oturum yok."));
    }
    
    
    $query = "select * from yapılacak WHERE user_id = ".$_SESSION['user_id']." order by post_id desc ";
    $execute = mysqli_query($conn, $query);



    
    while($row = mysqli_fetch_assoc($execute)){
        echo $row["user_id"] . " numaralı kullanıcı : " . $row["program"];
        echo "<br>postID#".$row["post_id"]."<br>";
        echo "-*-*-*-*-*-*-*-*-*-*--*-*-*-*-*-*-<br>";
        
    }


    
    
    ?>
    


<br>
<form action="addedPost.php" method="post">
        <input  type="text" name="yapılacak" required>
        <input type="submit" value="Ekle">

</form>

<br>
<?php
    if(isset($_GET["uyari"])){
    echo $_GET["uyari"];
    }
?>
<form action="deletePost.php" method="post">
    <input type="text" name="postID">
    <input type="submit" value="silinecek post id giriniz">
</form>
<br>

<?php
if(isset($_GET["turnoff"])){
    echo $_GET["turnoff"];
}
?>
<form action="logout.php" method="post">
    <input type="submit" value="logout">
</form>

<?php print_r($_SESSION);
echo "<br>";

        
?>

</body>
</html>