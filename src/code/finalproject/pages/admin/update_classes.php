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
<title>Update Classes - H.T.U Martial Arts</title>
</head>
<body>

<?php include "../shared/nav.php"; ?> 

<div class="main-content">

    <header>
        <h1>Update Classes</h1>
        <p>Edit the class details below</p>
    </header>

    <section id="contact-form">
        <?php 
        $ID = $_GET['id'];
        $time = $_GET['time'];
        $monday = $_GET['monday'];
        $tuesday = $_GET['tuesday'];
        $wednesday = $_GET['wednesday'];
        $thursday = $_GET['thursday'];
        $friday = $_GET['friday'];
        $saturday = $_GET['saturday'];
        $sunday = $_GET['sunday'];

        

        echo "<form action='manage_classes.php' method='post'>
                <input type='hidden' name='ID' value='{$ID}'>
                
                <label for='time'>Time:</label><br>
                <input type='text'  name='time' value='{$time}' required><br><br>

                <label for='monday'>Monday:</label><br>
                <input type='text' name='monday' value='{$monday}' required><br><br>

                <label for='tuesday'>Tuesday:</label><br>
                <input type='text'  name='tuesday' value='{$tuesday}' required><br><br>

                <label for='wednesday'>Wednesday:</label><br>
                <input type='text'  name='wednesday' value='{$wednesday}' required><br><br>

                <label for='thursday'>Thursday:</label><br>
                <input type='text'  name='thursday' value='{$thursday}' required><br><br>

                <label for='friday'>Friday:</label><br>
                <input type='text'  name='friday' value='{$friday}' required><br><br>

                <label for='saturday'>Saturday:</label><br>
                <input type='text'  name='saturday' value='{$saturday}' required><br><br>

                <label for='sunday'>Tuesday:</label><br>
                <input type='text'  name='sunday' value='{$sunday}' required><br><br>

                <button type='submit' name='update'>Update Service</button>
              </form>";
        ?>
    </section>

</div>

<?php include "../shared/footer.php"; ?> 
</body>
</html>
