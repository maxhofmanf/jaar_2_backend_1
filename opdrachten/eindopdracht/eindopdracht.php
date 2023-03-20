<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php


date_default_timezone_set('Europe/Amsterdam');
$time = date('H');
if ($time > 6 && $time < 12) {
    $background_image = "images/morning.png";
    $message = "good morning";
} elseif($time > 12 && $time < 18) {
    $background_image = "images/afternoon.png";
    $message = "good afternoon";

} elseif($time > 18 && $time < 24 ) {
    $background_image = "images/evening.png";
    $message = "good evening";

} elseif($time < 6 ) {
    $background_image = "images/night.png";
    $message = "good night";

}

// 
?>
<body style="background-image: url(<?php echo $background_image ?>)">
    <?php 
    echo "<h2> Het is nu : ". date('H:i') . " </h2>"; 
    echo "<h3>{$message}</h3>";
    ?>
    
</body>
</html