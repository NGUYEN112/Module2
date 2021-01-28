<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StopWatch</title>
</head>
<body>
<?php
include_once('stopwatch.php');

StopWatch::start();

sleep(2);

echo 'Elapsed time: ' . StopWatch::elapsed() . ' seconds';
?>
</body>
</html>
