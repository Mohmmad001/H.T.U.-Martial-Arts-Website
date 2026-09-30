<?php
include "../shared/check_session.php";
include "../db/db.php";

if (isset($_POST['submit'])) {
    $service = $_POST['service'];
    $details = $_POST['details'];
    $price = $_POST['price'];

    $query = "INSERT INTO services (Service, Details, Price) 
              VALUES ('$service', '$details', '$price')";
    mysqli_query($con, $query);

    echo "<script>
        alert('Service added successfully');
    </script>";

    header("location: manage_service.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Service</title>

    <link rel="stylesheet" href="../../css/stylecontact.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">

    <header>
        <h1>Add New Service</h1>
        <p>Create a new service</p>
    </header>

    <section id="contact-form">
        <h2>Service Information</h2>

        <form method="POST">
            <label>Service Name:</label><br>
            <input type="text" name="service" required><br><br>

            <label>Details:</label><br>
            <input type="text" name="details" required><br><br>

            <label>Price:</label><br>
            <input type="number" name="price" required><br><br>

            <button type="submit" name="submit">
                Add Service
            </button><br><br><br>
        </form>
    </section>
<br><br>
</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
