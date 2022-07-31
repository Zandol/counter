<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counter count timer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>PHP CLOCK</h1>
<p><?php
$target = mktime(0, 0, 0, 8, 2, 2022);
$today =time();
$difference= ($target-$today);
$days=(int)($difference/86400);
print"our event will occur in $days days";
?></p>


</body>
</html>
