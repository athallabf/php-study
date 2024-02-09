<?php
$file = 'extras/users.txt';

if (file_exists($file)) {
  // echo readfile($file);

  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  echo $contents;
  fclose($handle);
} else {
  $handle = fopen($file, 'w'); // failed to open: permission denied
  $contents = "ata \n ngops \n kons";
  fwrite($handle, $contents);
  fclose($handle);
}
