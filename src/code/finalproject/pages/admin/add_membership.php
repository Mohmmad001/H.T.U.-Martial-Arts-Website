<?php
include "../shared/check_session.php";
include "../db/db.php";

if (isset($_POST['submit'])) {
    $option = $_POST['option'];
    $details = $_POST['details'];
    $price = $_POST['price'];

    mysqli_query($con,"INSERT INTO membership (Option, Details, Price)
         VALUES ('$option', '$details', '$price')" );

    echo "<script>
        alert('Membership added successfully');
    </script>";

    header("location: manage_membership.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Membership</title>

<link rel="stylesheet" href="../../css/stylecontact.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">

    <header>
        <h1>Add New Membership</h1>
        <p>Create a new membership option</p>
    </header>

    
    <section id="contact-form">
        <h2>Membership Information</h2>
<br>
        <form method="POST">
            <label>Option</label><br>
            <input type="text" name="option" required><br><br>

            <label>Details</label><br>
            <input type="text" name="details" required><br><br>

            <label>Price</label><br>
            <input type="number" name="price" required><br><br>

            <button type="submit" name="submit">Add Membership</button><br><br>
        </form>
    </section>
<br><br>
</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
