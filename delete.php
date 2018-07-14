<?php include('server.php');

    if (isset($_SERVER['REQUEST_METHOD']))
    {
        $userid = $_POST['id'];
        $dsql = "DELETE FROM users WHERE id = '".$userid."'";
        mysqli_query($db, $dsql);
        header('Location: admin.php');
    }

?>


