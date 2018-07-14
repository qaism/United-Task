<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $username = $_GET['username'];
    $email = $_GET['email'];
?>
<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="card">

            <div class="card-body">

                <form action="update.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

                    <div class="form-group">

                        <input type="text" name="username" class="form-control" value="<?php echo $username?>">

                    </div>

                    <div class="form-group">

                        <input type="email" name="email" class="form-control" value="<?php echo $email?>">

                    </div>

                    <div class="form-group">

                        <input type="password" name="password" placeholder="Enter the new password" class="form-control">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Update</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>