<?php
include "../shared/check_session.php";
include "../db/db.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $job = $_POST['job'];
    $details = $_POST['details'];

    $query = "INSERT INTO instructors (Name, Job, Details)
         VALUES ('$name', '$job', '$details')";

    mysqli_query($con,$query);

    echo "<script>
        alert('Instructor added successfully');
    </script>";

    header("location: manage_instructor.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Instructor</title>

<link rel="stylesheet" href="../../css/stylecontact.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">
<br><br>
    <header>
        <h1>Add New Instructor</h1>
        <p>Create a new instructor record</p>
    </header>
    <br><br>

    
    <section id="contact-form">
        <h2>Instructor Information</h2>

        <form method="POST">
            <label>Name</label><br>
            <input type="text" name="name" required><br><br>

            <label>Job</label><br>
            <input type="text" name="job" required><br><br>

            <label>Details</label><br>
            <input type="text" name="details" required><br><br>

            <button type="submit" name="submit">Add Instructor</button><br>
        </form>
    </section>
<br><br>
</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
