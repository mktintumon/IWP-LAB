<?php
session_start(); // if not used show --> GUEST

// Accessing session variables
$loggedUser = isset($_SESSION['user']) ? 
                $_SESSION['user'] : '
                Guest User';
?>


<!DOCTYPE html>
<html>
<head>
    <title>22MCA0170-MOHIT</title>
</head>
<body>
    <h1>Welcome to Webpage 2</h1>
    <h3> 
        <?php 
            echo "Your session is running...." . $loggedUser;
        ?>
    </h3>
</body>
</html>
