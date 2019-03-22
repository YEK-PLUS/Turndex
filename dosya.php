<?php

//----------> Klasör Sil
function KlasorSil($dir) {
if (substr($dir, strlen($dir)-1, 1)!= '/')
$dir .= '/';
//echo $dir; //silinen klasörün adı
if ($handle = opendir($dir)) {
 while ($obj = readdir($handle)) {
  if ($obj!= '.' && $obj!= '..') {
   if (is_dir($dir.$obj)) {
    if (!KlasorSil($dir.$obj))
     return false;
    } elseif (is_file($dir.$obj)) {
     if (!unlink($dir.$obj))
      return false;
     }
   }
 }
  closedir($handle);
  if (!@rmdir($dir))
  return false;
  return true;
 }
return false;
}
include("url2.php");
$as =$_GET["sil"];
$asol = "$nokök$as";
KlasorSil($asol);
include("bekle.php");
?>