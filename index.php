<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors' , 'on');
    mb_internal_encoding('UTF-8');

    $url = $_SERVER['REQUEST_URI'];

    if (preg_match('/\d/', $url)) include 'code-second.php';
    else include 'code.php';

    
  ?>
</body>
</html>