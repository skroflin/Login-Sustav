<?php
session_start();
    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja web stranica</title>
</head>
<body>
    
    <a href="logout.php">Logout</a>
    <h2 style="text-align: center;">Ovo je glavna stranica</h2>

    <br>

    <p style="text-align: center">
    Pozdrav, <?php echo $user_data['user_name'];?>
    </p>

</body>
</html>