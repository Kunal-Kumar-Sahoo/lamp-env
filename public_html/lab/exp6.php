<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Data Display</title>
</head>
<body>

<?php
$jsonData = file_get_contents('data.json');
$userData = json_decode($jsonData, true);
?>

<h1>User Information</h1>

<div id="userInfo">
    <p><strong>Name:</strong> <?php echo $userData['name']; ?></p>
    <p><strong>Age:</strong> <?php echo $userData['age']; ?></p>
    <p><strong>City:</strong> <?php echo $userData['city']; ?></p>
    <p><strong>Email:</strong> <?php echo $userData['email']; ?></p>
</div>

</body>
</html>
