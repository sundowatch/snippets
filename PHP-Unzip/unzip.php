<?php


$zip = new ZipArchive;
$res = $zip->open('zip-file.zip');
if ($res === TRUE) {
  $zip->extractTo('./');
  $zip->close();
  echo 'Unzip successful';
} else {
  echo 'Unzip failed';
}


?>