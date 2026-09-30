<?php 
include '../db/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../css/stylemember.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<title>Memberships - H.T.U Martial Arts</title>
</head>
<body>

<?php include '../shared/nav.php'; ?>

<section class='main-content'>

<section class='intro'>
 <h1>Memberships</h1>
 <p>We provide flexible membership plans for beginners and advanced athletes,
     offering professional coaching, structured classes, and a motivating training environment.</p>
</section>

<?php 
$query = "SELECT * FROM membership";
$result = mysqli_query($con, $query);

echo "<div class='container'>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='option'>";
    echo "<h1>" . $row['Option'] . "<br>" . $row['Price'] . "$</h1>";
    echo "<p>" . $row['Details'] . "</p>";
    echo "</div>";
}

echo "</div>";
?>

</section>

<?php include '../shared/footer.php'; ?>
    
</body>
</html>
