<style>
        *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        }
        a{
            text-decoration: none;
        }
        body{
            background-color: #f8f9f8;
            font-family: tahoma;
        }
        header a{
            color: #ffffff;
        }
        header div{
            padding : 20px;
        }
        header{
            background-color: #303d87;
            display: flex;
            color: white;
            justify-content: center;
            align-items: center;
        }
        footer{
            padding: 20px;
            text-align: center;
            background-color: #eee;
        }
        input{
            margin: 4px;
            padding: 8px;
            width: 100%;
        }
        button{
            padding: 10px;
            cursor: pointer;
        }
        textarea{
            margin: 4px;
            padding: 8px;
            width: 100%;
        }
    </style>
    <header>
        <div><a href="index.php">Home</a></div>
        <div><a href="profile.php">Profile</a></div>
        <?php if(empty($_SESSION["info"])):
            // login olduğunda  profile page e gider header da home / profile / logout olur 
            ?>
            <div><a href="login.php">Login</a></div>
            <div><a href="signup.php">Signup</a></div>
        <?php else:;?>
            <div><a href="logout.php">Logout</a></div>
        <?php endif;?>
    </header>