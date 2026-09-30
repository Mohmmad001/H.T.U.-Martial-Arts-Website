<?php 
include "../shared/check_session.php"; 
include "../db/db.php";                


if(isset($_POST['ID'])){
    $ID = $_POST['ID'];  
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $membership_option = ($_POST['membership']); 

    
    mysqli_query($con, "UPDATE users SET name='$name', username='$username', email='$email', password='$password' WHERE ID='$ID'");

    
    $res = mysqli_query($con, "SELECT ID FROM membership WHERE `Option`='$membership_option' LIMIT 1");

    if(mysqli_num_rows($res) > 0){
        
        $row = mysqli_fetch_assoc($res);
        $membership_id = $row['ID'];

        
        $check = mysqli_query($con, "SELECT * FROM member_user WHERE user_id='$ID'");
        if(mysqli_num_rows($check) > 0){
            
            mysqli_query($con, "UPDATE member_user SET member_id='$membership_id' WHERE user_id='$ID'");
        } else {
            
            mysqli_query($con, "INSERT INTO member_user(user_id, member_id) VALUES('$ID', '$membership_id')");
        }
    } else {
        
        mysqli_query($con, "DELETE FROM member_user WHERE user_id='$ID'");
    }

    echo "<script>
        alert('User and membership updated successfully');
        window.location.href='manage_useres.php';
    </script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/stylecontact.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<title>Update User - H.T.U Martial Arts</title>
</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">

    <header>
        <h1>Update User</h1>
        <p>Edit the user details below</p>
    </header>

    <section id="contact-form">
        <?php 
        $ID = $_GET['id'];
        $name = $_GET['name'];
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $membership = $_GET['membership'];

        
        $current_member_id = 0;
        $member_query = mysqli_query($con, "SELECT member_id FROM member_user WHERE user_id='$ID'");
        if(mysqli_num_rows($member_query) > 0){
            $member_row = mysqli_fetch_assoc($member_query);
            $current_member_id = $member_row['member_id'];
        }

       
        $membership_result = mysqli_query($con, "SELECT * FROM membership");

        echo "<form action='update_user.php' method='post'>
                <input type='hidden' name='ID' value='{$ID}'>

                <label for='name'>Name:</label><br>
                <input type='text' id='name' name='name' value='{$name}' required><br><br>

                <label for='username'>Username:</label><br>
                <input type='text' id='username' name='username' value='{$username}' required><br><br>

                <label for='email'>Email:</label><br>
                <input type='email' id='email' name='email' value='{$email}' required><br><br>

                <label for='password'>Password:</label><br>
                <input type='text' id='password' name='password' value='{$password}' required><br><br>

                <label for='membership'>Current Membership:</label><br>
                <input type='text' id='membership' name='membership' value='{$membership}' required><br><br>
                <br><br>

                <button type='submit' name='update'>Update User</button>
              </form>";
        ?>
    </section>

</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
