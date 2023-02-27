<?php

if (isset($_POST['submit'])) {

    session_start();
    require_once('database.php');

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM users WHERE name= '$username';" ;
    $result = mysqli_query($connection, $query);

    
    if (mysqli_num_rows($result) != 1) {
        header('Location: ../index.php?status=userNotFound');
        exit();
        
    }
    else {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;

            header('Location: ../index.php?status=LoggedIn');
        }
        else {
            header('Location: ../index.php/status=WrongPassword');
            exit();
        }
    }

    
        
       


    
    //var_dump($user);
   
}