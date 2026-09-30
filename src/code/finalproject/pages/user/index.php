<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>H.T.U Martial Arts</title>

</head>
<body>

   
    <?php include '../shared/nav.php'; ?>

    <div class="main-content">
    
      
        <header>
            <h1>Welcome to H.T.U Martial Arts</h1>
            <p>Your journey to strength, discipline, and self-defence starts here!</p>
        </header>

        
        <section id="about">
            <h2>About H.T.U Martial Arts</h2>
            <p>H.T.U Martial Arts offers classes in multiple martial arts, fitness training, and self-defence courses. Our gym features a fully equipped training area, sauna, steam room, and more.</p>
        </section>

       
        <section id="classes">
            <h2>Our Classes</h2>
            <p>Explore our martial arts programs and fitness courses designed for all levels.</p>
        </section>

       
        <section id="membership">
            <h2>Membership Options</h2>
            <p>Basic, Intermediate, Advanced, and Elite memberships to suit your goals.</p>
        </section>

       
        <section id="instructors">
            <h2>Meet Our Instructors</h2>
            <p>Learn from our experienced martial arts and fitness coaches.</p>     
        </section>

        <div id="dom-example">
    <button id="change-text">How I could discover more?</button>
    <p id="demo">Hello, welcome to H.T.U Martial Arts!</p>
</div>

    </div>

    
    <?php include '../shared/footer.php'; ?>

    
    <script>
    function changeText() {
    document.getElementById("demo").innerText =
        "You could explore our website using the navigation bar at the top!";
}

document.getElementById("change-text").onclick = changeText;
    </script>

</body>
</html>
