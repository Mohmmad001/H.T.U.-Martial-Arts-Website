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
<title>Update Membership - H.T.U Martial Arts</title>
</head>
<body>

<?php include "../shared/nav.php"; ?> 

<div class="main-content">
<br>
<br>
    <header>
        <h1>Update Membership</h1>
        <p>Edit the membership details below</p>
    </header>

    <section id="contact-form">
    <?php 
    $ID = $_GET['id'];
    $option = $_GET['option'];
    $details = $_GET['details'];
    $price = $_GET['price'];

    echo "<form action='manage_membership.php' method='post'>
            <input type='hidden' name='ID' value='{$ID}'>
            
            <label for='option'>Option:</label><br>
            <input type='text'  name='option' value='{$option}' required><br><br>

            <label for='details'>Details:</label><br>
            <input type='text' name='details' value='{$details}' required><br><br>

            <label for='price'>Price:</label><br>
            <input type='number'  name='price' value='{$price}' required><br><br>

            <button type='submit' name='update'>Update Membership</button><br><br>
          </form>";
    ?>
    
    </section>

<br>
<br>
<br>
</div>

<?php include "../shared/footer.php"; ?> 
</body>
</html>
