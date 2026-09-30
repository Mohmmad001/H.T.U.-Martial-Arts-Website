<?php
session_start();
include '../db/db.php'; 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password']; 

    $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Username or email already exists!');</script>";
    } else {
        mysqli_query($con, "INSERT INTO users(name, username, email, password) VALUES('$name','$username','$email','$password')");
        
        
        $result = mysqli_query($con, "SELECT id FROM users WHERE username = '$username'");

          $row = mysqli_fetch_assoc($result);
           $_SESSION['user_id'] = $row['id'];

        $_SESSION['username'] = $username;

        
        header("Location: ../user/index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/sign.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Sign Up - H.T.U Martial Arts</title>
</head>
<body>

<?php include '../shared/nav.php'; ?>

<section class='main-content'>
  <header>
    <h1>Join us today! Create your account in seconds.</h1>
    <p>Create an account to buy and manage your memberships, track your progress, and enjoy exclusive services!</p>
    <p>It's quick, simple, and you’ll get full access to our classes and VIP perks.</p><br>
    <p>Already have an account? <a href="login.php">log in here</a> to continue your journey!</p>
  </header>

  <section class="account">
    <form action="" method="post">

      <label for="name">Name</label><br>
      <input type="text" placeholder="Enter your real name" name="name" required>
      <br><br>

      <label for="username">Username</label><br>
      <input type="text" placeholder="Enter your username" name="username" required>
      <br><br>

      <label for="email">Email</label><br>
      <input type="email" placeholder="Enter your email" name="email" required>
      <br><br>

      <label for="password">Password</label><br>
      <input type="password" placeholder="Enter a strong password" name="password" required>
      <br><br>

      <input type="submit" name="submit" value="Create Account">

    </form>
  </section>

</section>

<?php include '../shared/footer.php'; ?>

</body>
</html>
