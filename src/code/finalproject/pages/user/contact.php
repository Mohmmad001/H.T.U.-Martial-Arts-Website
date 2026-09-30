<?php 
session_start();
include "../db/db.php";

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO messages (name, email, message) 
              VALUES ('{$name}', '{$email}', '{$message}')";
    mysqli_query($con, $query);

    echo "<script>alert('Thanks for your feedback');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet" href="../../css/stylecontact.css">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Contact Us - H.T.U Martial Arts</title>
</head>
<body>


<?php include '../shared/nav.php'; ?>

<div class="main-content">

   
    <header>
        <h1>Contact H.T.U Martial Arts</h1>
        <p>We would love to hear from you!</p>
    </header>

   
    <section id="contact-info">
        <h2>Our Contact Information</h2>

        <p><i class="fa-solid fa-envelope"></i> Email: contact@htumartialarts.com</p>
        <p><i class="fa-solid fa-phone"></i> Phone: +962 7 1234 5678</p>
        <p><i class="fa-brands fa-whatsapp"></i> WhatsApp: +962 7 8765 4321</p>
        <p><i class="fa-brands fa-instagram"></i> Instagram: @htumartialarts</p>
        <p><i class="fa-brands fa-facebook"></i> Facebook: H.T.U Martial Arts</p>
    </section>

   
    <section id="contact-form">
        <h2>Send Us Your Message</h2>

        <form method="POST" action="">

            <label for="name" class="form-label">Your Name</label><br>
            <input type="text" id="name" name="name"  required><br>

            <label for="email" class="form-label">Your Email</label><br>
            <input type="email" id="email" name="email"  required><br>

            <label for="message" class="form-label">Your Message</label><br>
            <textarea id="message" name="message"   required></textarea><br>

            <button type="submit" name="send" class="btn btn-dark">
                Send Message
            </button>

        </form>
    </section>

</div>


<?php include '../shared/footer.php'; ?>

</body>
</html>
