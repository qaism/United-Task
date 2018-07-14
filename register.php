<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card">

                <div class="card-body">

                    <?php include('errors.php') ?>

                    <form action="register.php" method="post">

                        <div class="form-group">

                            <input type="text" name="username" class="form-control" placeholder="Enter Your username" value="<?php echo $username?>">

                        </div>

                        <div class="form-group">

                            <input type="email" name="email" class="form-control" placeholder="Enter Your email" value="<?php echo $email?>">

                        </div>

                        <div class="form-group">

                            <input type="password" name="password_1" class="form-control" placeholder="Choose Your password">

                        </div>

                        <div class="form-group">

                            <input type="password" name="password_2" class="form-control" placeholder="Confirm Your password">

                        </div>

                        <div class="form-group">

                            <button type="submit" name="register" class="btn btn-primary">Register</button>

                        </div>

                        <div class="form-group">

                            <p>Already a member? <a href="login.php">please sign in</a></p>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>
</html>