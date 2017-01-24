<?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H");
    $timezone = date("e");
    $message ;

    if ($time >= "6" && $time < "12") {
        $message = "<p>Goede morgen</p>";
        $image = "backgrounds/morning.png";
    } else
        if ($time >= "12" && $time < "18") {
            $message ="<p>Goede middag</p>";
            $image = "backgrounds/afternoon.png";
        } else
            if ($time >= "18" && $time < "24") {
                $message = "<p>Goede avond</p>";
                $image = "backgrounds/evening.png";
            } else
                if ($time >= "0" && $time < "6") {
                    $message = "<p>Goede nacht</p>";
                    $image = "backgrounds/night.png";
                }
    echo date("<p>h:i</p>");
    ?>
    
<!DOCTYPE html>    
<html>
<head>
    <title>Morning lips</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
</head>
<body style="background-image: url(<?php echo $image; ?>); background-size: cover;">
 <p><?php echo $message; ?></p>

</body>
</html>