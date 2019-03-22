<html>
<head>
<link rel="stylesheet" href="sil.css">

</head>
<body>
<?php

include ("dilgoster.php");
include ("dilsec.php");

?>
<div class="mesaj1">
<div class="mesaj">
<h1><?php print $sil1;?></h1>
</div>
</div>
<div class="cerceve11">
<div class="cerceve1">

<div class="sor11">
<form class="sor1" method="get" action="file.php">

<?php print $sil2;?>

		<INPUT TYPE="hidden" NAME="sil" value=
		<?php $sildosya =$_GET["dosya"] ; print $sildosya;?>
		>
		<INPUT TYPE="hidden" NAME="dil" value=
		<?php $dil =$_GET["dil"] ; print $dil;?>
		>

<br>

<input class="sil" type="submit" value=<?php print $sil3;?>>

</form>
</div>
</div>
</div>
<script>
  function merhaba(){
   history.go(-1)
  }
</script> 	
<div class="cerceve22">
<div class="cerceve2">
<div class="sor22">
<div class="sor2">
<?php print $sil4;?>
<button class="silme" onclick=merhaba()><?php print $sil5;?>
</button>
</div>
</div>
</div>
</div>
</body>
</html>