
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../app/views/assets/head.php" ?>
    <title>Login</title>
</head>

<body class="d-flex flex-column min-vh-100">

<!-- Header -->
<?php include "../app/views/assets/header.php" ?>
<!-- </Header> -->

<!-- Main -->
<main class="main">

    <!-- Latest Articles -->
    <div class="section jumbotron mb-0 h-100">
        <!-- container -->
        <div class="container d-flex flex-column justify-content-center align-items-center h-100">

            <div class="wrapper my-0 pt-3 bg-white w-50 text-center">
                <img src="../public/image/logo/admin_logo.png" alt="dev culture logo" style="width: 100px;height: auto;">
            </div>

            <!-- row -->
            <div class="wrapper bg-white rounded px-4 py-4 w-50">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                        <span class="invalid-feedback"><?= $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?= $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Login">
                    </div>
                    <p><a href="#" class="text-muted">Lost your password?</a></p>
                </form>
            </div>

            <!-- /row -->

        </div>
        <!-- /container -->
    </div>


</main><!-- </Main> -->

<!-- Footer -->
<!-- <?php include "../assets/footer.php" ?> -->
</body>

</html>