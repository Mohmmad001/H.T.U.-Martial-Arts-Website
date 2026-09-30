<?php 
include "../shared/check_session.php"; 
include "../db/db.php"; 


if(isset($_POST['ID'])){
    $ID = (int)$_POST['ID'];  
    $service = $_POST['service'];
    $details = $_POST['details'];
    $price = (int)$_POST['price']; 

    $query = "UPDATE services 
              SET Service='$service', Details='$details', Price=$price 
              WHERE ID = $ID";

    mysqli_query($con, $query);
}


if(isset($_GET['id'])){
    $ID = (int)$_GET['id'];  

    $query = "DELETE FROM services WHERE ID = '$ID'";
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
    <title>Manage Services</title>
</head>
<body>

<?php include "../shared/nav.php"; ?> 

<section class='main-content'>
    <br><br><br>
<?php 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Service</th>
<th>Details</th>
<th>Price</th>
<th>Operation</th>
</tr>";

$query = "SELECT * FROM services";
$result = mysqli_query($con , $query);

if(mysqli_num_rows($result) > 0){
    while($row =  mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['ID']}</td>
        <td>{$row['Service']}</td>
        <td>{$row['Details']}</td>
        <td>{$row['Price']}</td>
        <td>
        <a href='update_service.php?id={$row['ID']}&service={$row['Service']}&details={$row['Details']}&price={$row['Price']}'>Update</a> |
        <a href='manage_service.php?id={$row['ID']}'>Delete</a>
        </td>
        </tr>";
    }
}
echo "</table>";
?>
<a href="add_service.php">
    Add a record
</a>

<br><br><br><br><br><br><br><br>

</section>


<?php include "../shared/footer.php"; ?>
</body>
</html>
