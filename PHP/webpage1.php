<?php
session_start();

// Registering a variable 
$_SESSION['user'] = 'Mohit Kumar';
?>


<!DOCTYPE html>
<html>
<head>
    <title>22MCA0170-MOHIT</title>
</head>
<body>
    <h1>Welcome to Webpage 1</h1>
    <h3>Hello, 
        <?php 
            echo $_SESSION['user']; 
        ?>
    </h3>

    <!-- Generating and sending SID to webpage 2 -->
    <a href="webpage2.php?<?php echo session_id(); ?>">Go to Webpage 2</a>
</body>
</html>
