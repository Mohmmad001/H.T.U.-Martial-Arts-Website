<?php 
include '../shared/check_session.php';
include '../db/db.php';

if (isset($_POST['delete_membership'])) {
    $user_id = $_SESSION['user_id'];

    mysqli_query($con, "DELETE FROM member_user WHERE user_id = '$user_id'");

    echo "<script>
        alert('Membership cancelled successfully!');
        window.location.href='membership_manage.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/membership_manage.css">
<link rel="stylesheet" href="../../css/classes.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<title>Membership Manage</title>
</head>
<body>

<?php include '../shared/nav.php'; ?>

<section class='main-content'>

<section class='intro'>
<h1>Memberships</h1>
<p>
We provide flexible membership plans for beginners and advanced athletes,
offering professional coaching, structured classes, and a motivating training environment.
</p>

<?php
$user_id = $_SESSION['user_id'];


$query = "SELECT member_id FROM member_user WHERE user_id = '$user_id'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $member_id = $row['member_id'];

    $query2 = "SELECT * FROM membership WHERE ID = '$member_id'";
    $result2 = mysqli_query($con, $query2);
    $membership = mysqli_fetch_assoc($result2);

    echo "<p><b>Your current membership is: {$membership['Option']}</b></p>";

   
    echo "<form method='post' style='margin-top:10px;'>
            <button type='submit' name='delete_membership'>
                Cancel Membership
            </button>
          </form>";

} else {
    echo "<p>You don't have a subscription yet.</p>";
}
?>
</section>

<?php

$query3 = "SELECT * FROM membership";
$result3 = mysqli_query($con, $query3);

echo "<div class='container'>";
while ($row = mysqli_fetch_assoc($result3)) {
    echo "<div class='option'>";
    echo "<h1>{$row['Option']}<br>{$row['Price']}$</h1>";
    echo "<p>{$row['Details']}</p>";
    echo "<form method='post'>";
    echo "<button type='submit' name='membership_id' value='{$row['ID']}'>Subscribe</button>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";


if (isset($_POST['membership_id'])) {
    $member_id = $_POST['membership_id'];

    $check = mysqli_query($con, "SELECT * FROM member_user WHERE user_id='$user_id'");
    if (mysqli_num_rows($check) > 0) {
        mysqli_query($con, "UPDATE member_user SET member_id='$member_id' WHERE user_id='$user_id'");
    } else {
        mysqli_query($con, "INSERT INTO member_user(user_id, member_id) VALUES('$user_id','$member_id')");
    }

    echo "<script>
        alert('Membership subscribed successfully!');
        window.location.href='membership_manage.php';
    </script>";
}
?>

<section class='intro'>
<h1>Our Services</h1>
<p>We provide a variety of sports and fitness services to help you stay active and healthy.</p>

<?php
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM user_service WHERE user_id = '$user_id'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {

    echo "<p><b>The services that are valid for you are:</b></p>";
    echo "<ul>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>{$row['service']}</li>";
    }

    echo "</ul>";

} else {
    echo "<p><b>You currently have no services.</b></p>";
}
?>
</section>

<?php
$query = "SELECT * FROM services";
$result = mysqli_query($con, $query);

echo "<table border='1'>";
echo "<tr><th>Service</th><th>Details</th><th>Price</th><th>Buy</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['Service']}</td>";
    echo "<td>{$row['Details']}</td>";
    echo "<td>{$row['Price']}</td>";
    echo "<td>
            <form method='post'>
                <button type='submit' name='service' value='{$row['Service']}'>Subscribe</button>
            </form>
          </td>";
    echo "</tr>";
}

echo "</table>";


if (isset($_POST['service'])) {

    $service = $_POST['service'];

    $query = "SELECT * FROM user_service WHERE user_id = '$user_id' AND service = '$service'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            alert('YOU ALREADY HAVE THIS SERVICE!');
            window.location.href='membership_manage.php';
        </script>";
    } else {
        mysqli_query($con, "INSERT INTO user_service (user_id, service)
                            VALUES ('$user_id', '$service')");

        echo "<script>
            alert('Service bought successfully!');
            window.location.href='membership_manage.php';
        </script>";
    }
}
?>

</section>

<?php include '../shared/footer.php'; ?>

</body>
</html>
