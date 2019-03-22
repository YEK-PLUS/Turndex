<!--DOCTYPE html-->
<html>
<head>
<meta charset="utf-8">
<!-- Safya Favicon ve Css dosyasını Belirtir -->
<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style.css">

<!-- Dil Dosyasını Çalıştırır -->

</head>
<body>
<?php 

include("yenile.php");

?>
<div class="scan11">
<div class="scan1">
<?php
/*
*  Dosya yöeticisin tarama ekini çalıştırır
*/
include("scan.php");
 ?>
</div>
</div>
<div class="scan22">
<div class="scan2">
<?php
/*
*  Dosya yöeticisin tarama ekini çalıştırır
*/
include("scanfile.php");

 ?>
</div>
</div>
<?php

include ("dilgoster.php");

?>

</body>
</html>