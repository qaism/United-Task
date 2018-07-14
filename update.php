<?php include('server.php');

if (isset($_SERVER['REQUEST_METHOD']))
{
    $userid = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $dsql = "UPDATE users SET username = '".$username."', email = '".$email."', password = '".$password."' WHERE id = '".$userid."'";
    mysqli_query($db, $dsql);
    header('Location: admin.php');
}

?>


