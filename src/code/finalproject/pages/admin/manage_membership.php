<?php 
include "../shared/check_session.php"; 
include "../db/db.php";


if(isset($_POST['ID'])){
    $ID = $_POST['ID'];
    $option = $_POST['option'];
    $details = $_POST['details'];
    $price = $_POST['price'];

    $query = "UPDATE membership SET Option='{$option}',Details='{$details}',Price='{$price}' WHERE ID = {$ID}";
    mysqli_query($con,$query);
}


if(isset($_GET['id'])){
   $ID = (int)$_GET['id'];
   $query = "DELETE FROM membership WHERE ID = {$ID}";
   mysqli_query($con,$query);
    echo "<script>
    alert('record was deleted succefully')</script>";
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
    <title>manage membership</title>
</head>
<body>

<?php include "../shared/nav.php"; ?> 

<section class='main-content'>
<?php 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Option</th>
<th>Details</th>
<th>Price</th>
<th>Operations</th>
</tr>";

$query = "SELECT * FROM membership";
$result = mysqli_query($con , $query);

if(mysqli_num_rows($result) > 0){
    while($row =  mysqli_fetch_assoc($result)){
       echo "<tr>
    <td>{$row['ID']}</td>
    <td>{$row['Option']}</td>
    <td>{$row['Details']}</td>
    <td>{$row['Price']}</td>
    <td>
        <a href='update_membership.php?id={$row['ID']}&option={$row['Option']}&details={$row['Details']}&price={$row['Price']}'>Update</a>
        | <a href='manage_membership.php?id={$row['ID']}'>Delete</a>
    </td>
</tr>";
    }
}
echo "</table>";
?>
<br><br>
<a href="add_membership.php">
    Add a record
</a>

</section>

<?php include "../shared/footer.php"; ?>
</body>
</html>
