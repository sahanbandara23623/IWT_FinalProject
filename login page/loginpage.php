<!DOCTYPE html>
<head> 
<title>Edumart Login</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
<body>
    <div class ="loginbox">
        <img src="avatar.jpeg" class="avatar">
        <h1>LOGIN</h1>
        <form action ="login.php" method ="post">
        <?php 

            if(isset($_GET['error'])){ ?>
             <p class="error"><?php echo $_GET['error']; ?></p><?php
    
            }

        ?>
        <br><br>

            <p>Email </p>
            <input type="email" name="uname"  placeholder="Email">
            <p>Password </p>
            <input type="password" name="password" placeholder="Account password"><br>
            <input type="submit" name="submit" value="SIGN IN">
            <a href="#">Login in with facebook</a><br>
            <a href="#">Login in with  google</a>
        
        </form>
        
    </div>


</body>

</head>
</html>
