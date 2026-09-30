<?php 
include "../shared/check_session.php";
include "../db/db.php";                
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../../css/stylecontact.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<title>Update Instructor - H.T.U Martial Arts</title>
</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">

    <header>
        <h1>Update Instructor</h1>
        <p>Edit instructor details below</p>
    </header>
<br>
    <section id="contact-form">
    <?php
        $ID = $_GET['id'];
        $name = $_GET['name'];
        $job = $_GET['job'];
        $details = $_GET['details'];

        echo "
        <form action='manage_instructor.php' method='post'>
            <input type='hidden' name='ID' value='{$ID}'>

            <label>Name:</label><br>
            <input type='text' name='name' value='{$name}' required><br><br>

            <label>Job:</label><br>
            <input type='text' name='job' value='{$job}' required><br><br>

            <label>Details:</label><br>
            <input type='text' name='details' value='{$details}' required><br><br>

            <button type='submit' name='update'>Update Instructor</button>
        </form>
        ";
    ?>
    <br><br>
    </section>
<br><br>
</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
