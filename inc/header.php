<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $name = basename($_SERVER['SCRIPT_NAME'],".php");
  echo "<title>".str_replace('_',' ',ucfirst($name))." - sslagalica</title>";
  echo '<link rel="stylesheet" href="css/'.$name.'.css">';
  ?>
</head>
<body>