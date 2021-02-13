<?php
$guestName = "Jo Ki Sung";
$today = date('l');
$todaysDate = date('l, F jS Y');

$backgroundColor = $_GET['color'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body bgcolor=<?= $backgroundColor ?> >
<h1>Program 01</h1>
today is: <?php echo $todaysDate ?>
<hr>
<h2>Hello, <?php echo $guestName ?></h2>
<h3>Happy <?php echo $today ?></h3>
</body>
</html>
