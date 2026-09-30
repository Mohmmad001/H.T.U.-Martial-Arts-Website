<?php 
include '../db/db.php'; 
session_start();
$query = "SELECT * FROM instructors";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instructors</title>
    <link rel="stylesheet" href="../../css/styleinstructors.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <title>H.T.U Martial Arts Instructors</title>
</head>
<body>

<?php include '../shared/nav.php'; ?> 

<section class='main-content'>

<section class='intro'>
<h1>Our instructors</h1>
<p>Our instructors are experienced, talented, and committed to helping you grow stronger, fitter, and more confident.</p>
</section>

<section class='instructors'>

<?php 
echo "<table border='1'>";

echo "<tr>
        <th>Name</th>
        <th>Job</th>
        <th>Details</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "<td>" . $row['Details'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
</section>

</section>

<?php include '../shared/footer.php'; ?> 

</body>
</html>
