<?php
include "../shared/check_session.php";
include "../db/db.php";

if (isset($_POST['submit'])) {
    $time = $_POST['time'];
    $monday = $_POST['monday'];
    $tuesday = $_POST['tuesday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];

    mysqli_query($con, "INSERT INTO timetable 
        (time, monday, tuesday, wednesday, thursday, friday, saturday, sunday)
        VALUES 
        ('$time','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday')");

    header("Location: manage_classes.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Class</title>

<link rel="stylesheet" href="../../css/stylecontact.css">
<link rel="stylesheet" href="../../css/nav.css">
<link rel="stylesheet" href="../../css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<?php include "../shared/nav.php"; ?>

<div class="main-content">

    <header>
        <h1>Add New Class</h1>
        <p>Create a new class schedule</p>
    </header>

    <section id="contact-form">
        <form method="POST">

            <label>Time</label><br>
            <input type="text" name="time" required><br><br>

            <label>Monday</label><br>
            <input type="text" name="monday"><br><br>

            <label>Tuesday</label><br>
            <input type="text" name="tuesday"><br><br>

            <label>Wednesday</label><br>
            <input type="text" name="wednesday"><br><br>

            <label>Thursday</label><br>
            <input type="text" name="thursday"><br><br>

            <label>Friday</label><br>
            <input type="text" name="friday"><br><br>

            <label>Saturday</label><br>
            <input type="text" name="saturday"><br><br>

            <label>Sunday</label><br>
            <input type="text" name="sunday"><br><br>

            <button type="submit" name="submit">Add Class</button>
        </form>
    </section>

</div>

<?php include "../shared/footer.php"; ?>
</body>
</html>
