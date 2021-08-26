<!-- Login Form in HTML -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="containter">
        <div class="col-md-12">
            <h2>Login</h2>
            <p>Please fill in your email and password.</p>
            <form action="" method="post">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn bnt-primary" value="Submit">
                </div>
                <p>Don't have an account? <a hred="register.php">Register here</a>.</p>
            </form>
        </div>
    </div>
</body>