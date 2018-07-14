<!DOCTYPE html>

<html>

<head>

    <title>Login Page</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card">

                    <div class="card-body">

                        <form action="json_data.php" method="post">

                            <div class="form-group">

                                <input type="text" name="username" class="form-control" placeholder="Enter Your username">

                            </div>

                            <div class="form-group">

                                <input type="password" name="password" class="form-control" placeholder="Choose Your password">

                            </div>

                            <div class="form-group">

                                <p>Not a member? <a href="register.php">Register now</a></p>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Login</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>