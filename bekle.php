<html>
<head>
	<meta charset="utf-8">
	<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="bekle.css">

</head>
<body>
	<?php include("dilsec.php");?>
	<div class="div1">
	<div class="div2">
	<div class="div3">
	<div class="div4">
	<h1><?php print $bekle1;?></h1>
	</div>
	</div>
	</div>
	</div>
	<div class="div5">
	<div class="div6">
	<div class="div7">
	<div class="div8">
	<h4><?php print $bekle2;?></h4>
	</div>
	</div>
	</div>
	</div>
	<div class="div9">
	<div class="div10">
	<div class="div11">
	<div class="div12">
	<h4><?php print $bekle3;?></h4>
	</div>
	</div>
	</div>
	</div>
	<div class="div13">
	<div class="div14">
	<div class="div15">
	<div class="div16">
	<h4><?php print $bekle4;?></h4>
	</div>
	</div>
	</div>
	</div>
	<script>
  function merhaba(){
   history.go(-2)
  }
  setTimeout(merhaba, 5000);
</script>
	<center> <b><?php print $bekle5;?><br><b id="gerisay" say="5" bitir="0">&nbsp;</b> <?php print $bekle6;?></b> <script type="text/javascript"> var gerisay = document.getElementById("gerisay"); var saniye = gerisay.getAttribute("say"); var kadar = gerisay.getAttribute("bitir"); var ms = ""; for(var i = kadar; i <= saniye; i++) { var ms = (saniye * 1000) - (i * 1000); setTimeout("ElementInnerHTML('gerisay', '" + i + "')", ms); } function ElementInnerHTML(elementid, html) { var el = document.getElementById(elementid);el.innerHTML = html; } </script> </center>
</body>
</html>