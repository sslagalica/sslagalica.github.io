<?php
foreach (glob("*.php") as $filename) {
  if ($filename!="index.php"){
  echo "<a style='font-size:40px;text-decoration:none' href='$filename'>".basename($filename,".php")."</a><br><br>";
  }
}
?>