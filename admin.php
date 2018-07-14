<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php

        $usql = "SELECT * FROM users";
        $users = mysqli_query($db, $usql);

    ?>

    <div class="container" style="margin-top: 40px">

        <div class="card">

            <div class="card-header">
                <strong>Registered Users</strong>
            </div>

            <div class="card-body">

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = $users->fetch_assoc()) {?>
                    <tr>
                        <th scope="row"><?php echo $row["id"]?></th>
                        <td><?php echo $row["username"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action="delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                        <button class="btn btn-danger">
                                            delete
                                        </button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <a href="edit.php?id=<?php echo $row['id']?>&&username=<?php echo $row['username']?>&&email=<?php echo $row['email'] ?>" class="btn btn-primary">
                                        edit
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</body>
</html>