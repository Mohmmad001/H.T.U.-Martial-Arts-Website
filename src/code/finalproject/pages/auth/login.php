<?php
session_start();
include '../db/db.php'; 

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);

        
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['username'] = $user['username'];

        if($_SESSION['username'] == 'Admin'){
            header("Location: ../admin/manage_useres.php");
            exit;
        }


        header("Location: ../user/index.php");
        exit;
    } else {
        echo "<script>alert('Invalid email or password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleinstructors.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/sign.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>Login - H.T.U Martial Arts</title>
</head>
<body>

<?php include '../shared/nav.php'; ?>

<section class='main-content'>

<header>
    <h1>Welcome Back</h1>
    <p>Here’s what’s new since your last visit.</p><br>
    <p>Don't have an account? <br><br>
    <a href="sign.php">Sign up here</a> to start your journey!</p>
</header>

<section class="account">
  <form action="" method="post">
<br>
    <label for="email">Email</label><br>
    <input type="email" placeholder="Enter your email" name="email" required>
    <br><br>

    <label for="password">Password</label><br>
    <input type="password" placeholder="Enter your password" name="password" required>
    <br><br>

    <input type="submit" name="submit" value="Log In">
    <br><br>

  </form>
</section>
<br><br><br>

</section>

<?php include '../shared/footer.php'; ?>

</body>
</html>
