<?php

$username= '';
$email= '';
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'utask');

if (isset($_POST['register']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    if (empty($username))
    {
        array_push($errors, "username field is required");
    }
    if (empty($email))
    {
        array_push($errors, 'email field is required');
    }
    if (empty($password_1))
    {
        array_push($errors, 'password field is required');
    }
    if ($password_1 != $password_2)
    {
        array_push($errors, 'passwords not matched');
    }

    if (count($errors) == 0)
    {
        $password = md5($password_1);
        $q = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
        $data = mysqli_query($db, $q);
    }
}

?>