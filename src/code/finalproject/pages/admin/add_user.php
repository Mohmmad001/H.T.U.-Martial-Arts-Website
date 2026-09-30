<?php
include "../shared/check_session.php";
include "../db/db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($con,"INSERT INTO users (name, username, email, password)
         VALUES ('$name', '$username', '$email', '$password')" );

    echo "<script>
        alert('User added successfully');
    </script>";

    header("Location: manage_useres.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>

    <link rel="stylesheet" href="../../css/stylecontact.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">

    <header>
        <h1>Add New User</h1>
        <p>Create a new user account</p>
    </header>

    
    <section id="contact-form">
        <h2>User Information</h2>

        <form method="POST">
            <label>Name</label><br>
            <input type="text" name="name" required><br><br>

            <label>Username</label><br>
            <input type="text" name="username" required><br><br>

            <label>Email</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit" name="submit">
                Add User
            </button>
        </form>
    </section>
    <br>
    <br>

</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
