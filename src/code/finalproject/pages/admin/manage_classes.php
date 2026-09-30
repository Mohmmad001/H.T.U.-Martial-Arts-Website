<?php 
include "../shared/check_session.php"; 
include "../db/db.php"; 


if(isset($_POST['ID'])){
$ID = $_POST['ID'];
$time = $_POST['time'];
$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thursday = $_POST['thursday'];
$friday = $_POST['friday'];
$saturday = $_POST['saturday'];
$sunday = $_POST['sunday'];

$query = "
UPDATE timetable 
SET 
    time = '$time',
    monday = '$monday',
    tuesday = '$tuesday',
    wednesday = '$wednesday',
    thursday = '$thursday',
    friday = '$friday',
    saturday = '$saturday',
    sunday = '$sunday'
WHERE ID = '$ID'
";

mysqli_query($con, $query);
}

if(isset($_GET['id'])){
  $ID = $_GET['id'];
  $query = "DELETE FROM timetable WHERE ID = '$ID'";
  mysqli_query($con,$query);
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
    <title>manage classes</title>
</head>
<body>

<?php include "../shared/nav.php"; ?> 

<section class='main-content'>
<?php 

$query = "SELECT * FROM timetable";
$result = mysqli_query($con , $query);

if(mysqli_num_rows($result) > 0){
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
        <th>operation</th>
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
       echo "<td>
        <a href='update_classes.php
            ?id={$row['ID']}
            &time={$row['time']}
            &monday={$row['monday']}
            &tuesday={$row['tuesday']}
            &wednesday={$row['wednesday']}
            &thursday={$row['thursday']}
            &friday={$row['friday']}
            &saturday={$row['saturday']}
            &sunday={$row['sunday']}'>
            Update
        </a>
        |
        <a href='manage_classes.php?id={$row['ID']}'
           onclick=\"return confirm('Are you sure you want to delete this class?');\">
           Delete
        </a>
    </td>";

        echo "</tr>";
    }
echo "</table>";
}

echo "<a href='add_classes.php'>
    Add a record
</a>";


?>
</section>

<?php include "../shared/footer.php"; ?>
</body>
</html>
