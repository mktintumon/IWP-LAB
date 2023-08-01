<?php
// Function to set a cookie with the current visit count
function setVisitCookie($count) {
    $expiry = time() + (60 * 60 * 24 * 30); // 30 days from now
    setcookie('visit_count', $count, $expiry);
}

// Function to get the visit count from the cookie
function getVisitCount() {
    if (isset($_COOKIE['visit_count'])) {
        return $_COOKIE['visit_count'];
    } else {
        return 0; // Default to 0 if the cookie is not set
    }
}

// Check if the visit count cookie is already set
$visitCount = getVisitCount();

// Increase the visit count for the current visit
$visitCount++;

// Set the updated visit count in the cookie
setVisitCookie($visitCount);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visit Counter</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <?php
    if ($visitCount > 1) {
        echo "<p>This is your $visitCount visit to our website. Thanks for coming back!</p>";
    } else {
        echo "<p>This is your first visit to our website. Welcome!</p>";
    }
    ?>
</body>
</html>
