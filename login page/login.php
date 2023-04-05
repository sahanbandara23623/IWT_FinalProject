<?php
    require "db_connection.php";

    

    if(isset($_POST['submit'])){

        $errors = array();

        if(!isset($_POST['uname']) || strlen(trim($_POST['uname'])) < 1){
            $errors[] = "username is missing / invalid";
            header('location:loginpage.php?error=username is missing / invalid');
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
            $errors[] = "password is missing / invalid";
            header('location:loginpage.php?error=password is missing / invalid');
        }

        if(empty($errors)){
            $username = mysqli_real_escape_string($conn, $_POST['uname']);

            $password = mysqli_real_escape_string($conn, $_POST['password']);

            // $query = "SELECT * FROM member WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";

            $query = "SELECT * FROM users WHERE email = '{$username}' AND password = '{$password}' LIMIT 1";

            $result = mysqli_query($conn, $query);

            if($result){
                
                if(mysqli_num_rows($result) == 1){
                    header('location:indexlogin.php');
                }else{
                    $errors = "Invalid username/ password";
                    header('location:loginpage.php?error="Invalid username/ password"');
                }
            }else{
                $errors = "database query faild";
                header('location:loginpage.php?error="database query faild"');
            }
        }


}       

// $conn->close();



?>

