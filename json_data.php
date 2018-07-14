<?php
    include('server.php');

    $username = $_POST['username'];

    $password = $_POST['password'];

    $enc_password = md5($password);

    $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$enc_password."'";

    $result = mysqli_query($db, $sql);

    $response = array();

    while ($row = mysqli_fetch_array($result))
    {
        $response = array('id'=>$row[0], 'username'=>$row[1], 'email'=>$row[2], 'password'=>$row[3]);
    }

    echo json_encode(array('user_data'=>$response));
?>