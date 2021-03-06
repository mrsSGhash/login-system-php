<!-- validate login credentials -->
<?php
    require_once "config.php";
    require_once "session.php";

    $error = '';
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //validate if email is empty
        if (empty($email)) {
            $error .= '<p class="error">Please enter email.</p>';
        }

        //validate if password is empty
        if (empty($password)) {
            $error .= '<p class="error">Please enter password.</p>';
        }

        //if there is no errors
        if (empty($error)) {
            $sql = "SELECT * FROM users WHERE email = ?";
            if($query = $db->prepare($sql)) {
                $query->bind_param('s', $email);
                $query->execute();
                $row = $query->fetch();

                if ($row) {
                    if (password_verify($password, $row['password'])) {
                        $_SESSION["userid"] = $row['id'];
                        $_SESSION["user"] = $row;

                        //redirect the user to welcome page
                        header ("location: welcome.php");
                        exit;
                    } else {
                        $error .= '<p class="error">The password is not valid.</p>';
                    }
                } else {
                    $error .= '<p class="error">No user exists with that email address.</p>';
                }
            }
            $query->close();
        }
        //close connection
        mysqli_close($db);
    }
?>

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
        <div class="row">
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
    </div>
</body>