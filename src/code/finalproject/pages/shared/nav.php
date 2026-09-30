<nav>
<?php
if(isset($_SESSION['user_id'])){

    if($_SESSION['username'] == 'Admin'){
        
        echo "<a href='../admin/manage_useres.php'>Manage users</a>";
        echo "<a href='../admin/manage_membership.php'>Manage membership</a>";
        echo "<a href='../admin/manage_service.php'>Manage services</a>";
        echo "<a href='../admin/manage_classes.php'>Manage classes</a>";
        echo "<a href='../admin/manage_instructor.php'>Manage instructors</a>";
        echo "<a href='../auth/logout.php'>Log out</a>";
    } else {
        
        echo "<a href='../user/index.php'>Home</a>";
        echo "<a href='../user/classes.php'>Classes & services</a>";
        echo "<a href='../user/membership.php'>Membership</a>";
        echo "<a href='../user/instructors.php'>Instructors</a>";
        echo "<a href='../user/membership_manage.php'>Manage my membership</a>";
        echo "<a href='../user/contact.php'>Contact us</a>";
        echo "<a href='../auth/logout.php'>Log out</a>";
    }

} else {
    
    echo "<a href='../user/index.php'>Home</a>";
    echo "<a href='../user/classes.php'>Classes & services</a>";
    echo "<a href='../user/membership.php'>Membership</a>";
    echo "<a href='../user/instructors.php'>Instructors</a>";
    echo "<a href='../user/contact.php'>Contact us</a>";
    echo "<a href='../auth/sign.php'>Sign up</a>";
    echo "<a href='../auth/login.php'>Log in</a>";
}
?>
</nav>
