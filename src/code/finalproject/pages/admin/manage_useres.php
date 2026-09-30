<?php 
include "../shared/check_session.php"; 
include "../db/db.php"; 

if(isset($_POST['ID'])){
    $ID = $_POST['ID'];  
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE users SET name='$name', username='$username', email='$email', password='$password' 
              WHERE ID='$ID'";
    mysqli_query($con, $query);
}

if(isset($_GET['delete_id'])){
    $delete_id = (int)$_GET['delete_id']; 

    
    mysqli_query($con, "DELETE FROM member_user WHERE user_id = $delete_id");

    
    mysqli_query($con, "DELETE FROM users WHERE ID = $delete_id");

    echo "<script>
    alert('Record and associated membership (if any) were deleted successfully');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../../css/manage_useres.css"> 
    <link rel="stylesheet" href="../../css/nav.css"> 
    <link rel="stylesheet" href="../../css/footer.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> 
    <title>Manage Users</title>
</head>
<body>

<?php include "../shared/nav.php"; ?>

<section class='main-content'>
<?php 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Current membership</th>
<th>Operation</th>
</tr>";

$query = "SELECT * FROM users";
$result = mysqli_query($con , $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $user_id = $row['ID'];

        
     $result1 = mysqli_query($con,"SELECT member_id FROM member_user WHERE user_id = '$user_id'");
if(mysqli_num_rows($result1) > 0){
    $member_row = mysqli_fetch_assoc($result1);
    $member_id = $member_row['member_id'];

    $membership_query = mysqli_query($con, "SELECT `Option` FROM membership WHERE ID = '$member_id'");
    $membership_row = mysqli_fetch_assoc($membership_query);
    if($membership_row){  
        $membership_option = $membership_row['Option'];
    } else {
        $membership_option = "-";
    }

} else {
    $membership_option = "-";
}

        echo "<tr>
            <td>{$row['ID']}</td>
            <td>{$row['name']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['password']}</td>
            <td>{$membership_option}</td>
            <td>
                <a href='update_user.php?id={$row['ID']}&name={$row['name']}&username={$row['username']}&email={$row['email']}&password={$row['password']}&membership={$membership_option}'>Update</a>
                | <a href='manage_useres.php?delete_id={$row['ID']}' onclick=\"return confirm('Are you sure you want to delete this user?');\">Delete</a>
            </td>
        </tr>";
    }
}
echo "</table>";
?>

<a href="add_user.php">
    Add a record
</a>

</section>

<?php include "../shared/footer.php"; ?>
</body>
</html>
