<?php 
include "../shared/check_session.php"; 
include "../db/db.php"; 


if(isset($_POST['ID'])){
    $ID = (int)$_POST['ID'];  
    $name = $_POST['name'];
    $job = $_POST['job'];
    $details = $_POST['details']; 

    $query = "UPDATE instructors 
              SET Name='$name', Job='$job', Details='$details'
              WHERE ID = $ID";

    mysqli_query($con, $query);
}


if(isset($_GET['id'])){
    $ID = (int)$_GET['id'];  

    $query = "DELETE FROM instructors WHERE ID = '$ID'";
    mysqli_query($con, $query);
    echo "<script>
    alert('record was deleted successfully')</script>";
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
    <title>Manage Instructors</title>
</head>
<body>

<?php include "../shared/nav.php"; ?> 

<section class='main-content'>
<?php 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Job</th>
<th>Details</th>
<th>Operation</th>
</tr>";

$query = "SELECT * FROM instructors";
$result = mysqli_query($con , $query);

if(mysqli_num_rows($result) > 0){
    while($row =  mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['ID']}</td>
        <td>{$row['Name']}</td>
        <td>{$row['Job']}</td>
        <td>{$row['Details']}</td>
        <td>
        <a href='update_instructor.php?id={$row['ID']}&name={$row['Name']}&details={$row['Details']}&job={$row['Job']}'>Update</a> |
        <a href='manage_instructor.php?id={$row['ID']}'>Delete</a>
        </td>
        </tr>";
    }
}
echo "</table>";
?>

<a href="add_instructor.php">
    Add a record
</a>

</section>

<?php include "../shared/footer.php"; ?>
</body>
</html>
