<?php 
include '../db/db.php';
$query = "SELECT * FROM timetable";
$result = mysqli_query($con, $query);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instructors</title>
    <link rel="stylesheet" href="../../css/classes.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>H.T.U Martial Arts Classes</title>
</head>
<body>

<?php include '../shared/nav.php';?>

<section class='main-content'>

<header>
    <h1>Our Classes</h1>
    <p>We offer a wide range of sports classes across different disciplines, suitable for beginners and advanced participants.</p>
</header>

<?php 
echo "<table border='1' >";
echo "<tr>
        <th>time</th>
        <th>monday</th>
        <th>tuesday</th>
        <th>wensday</th>
        <th>thrursday</th>
        <th>friday</th>
        <th>satarday</th>
        <th>sunday</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['monday'] . "</td>";
        echo "<td>" . $row['tuesday'] . "</td>";
        echo "<td>" . $row['wednesday'] . "</td>";
        echo "<td>" . $row['thursday'] . "</td>";
        echo "<td>" . $row['friday'] . "</td>";
        echo "<td>" . $row['saturday'] . "</td>";
        echo "<td>" . $row['sunday'] . "</td>";
        echo "</tr>";
}
echo "</table>";
?>

<br><br>

<header>
<h1>Our Services</h1>
    <p>We provide a variety of sports and fitness services to help you stay active and healthy.</p>
</header>

<?php
$query = "SELECT * FROM services";
$result = mysqli_query($con, $query);

echo "<table border='1' >";
echo "<tr>
        <th>Service</th>
        <th>Details</th>
        <th>Price</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Service'] . "</td>";
        echo "<td>" . $row['Details'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "</tr>";
}
echo "</table>";
?>

</section>

<?php include '../shared/footer.php'; ?>

</body>
</html>
