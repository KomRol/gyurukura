<?php


if (isset($_POST['submit'])) {

    require_once('database.php');
    
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($connection, $_POST['password_confirm']);
    $tos = mysqli_real_escape_string($connection, $_POST['tos']);
    $vezekeknev = mysqli_real_escape_string($connection, $_POST['vezeteknev']);;
    $keresztnev =mysqli_real_escape_string($connection, $_POST['keresztnev']);;
    $sex = 2;

    $query = "INSERT INTO `users`(`name`, `password`, `email`, `vezeteknev`, `keresztnev`, `sex`)
    VALUES (?, ?, ?, ?, ?, ?)";

    $statement = mysqli_stmt_init($connection);

    $query2 = "SELECT * FROM users WHERE name='$username';";
    $results2 = mysqli_query($connection, $query2);


    if (empty($username)|| empty($email)|| empty($password)|| empty($password_confirm)|| empty($tos)) 
    {
    
    header('Location: ../register_form.php?status=fillAll');
    exit();
}
    else if (mysqli_num_rows($results2) > 0) 
    {
    
    header('Location: ../register_form.php?status=userTaken');
    exit();
}
else if (filter_var($email, FILTER_VALIDATE_EMAIL)== false) 
{
   header('Location: ../register_form.php?status=wrongEmail');
   exit();
}
else if ($password != $password_confirm) 
{
    
    header('Location: ../register_form.php?status=passwordMissMatch');
    exit();
}
else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (mysqli_stmt_prepare($statement, $query) == true) {
        mysqli_stmt_bind_param($statement, 'sssssi', $username, $hashedPassword, $email, $vezekeknev, $keresztnev, $sex);
        mysqli_stmt_execute($statement);
        header('Location: ../index.php?status=registrationComplete');
    }
    else {
        echo 'Statement error';
    }
}
 



    mysqli_query($connection, $query);

    echo'Regisztráció kész';

}