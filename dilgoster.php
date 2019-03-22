<?php
$sildosya =$_GET["dosya"];
$yol =$_SERVER['SCRIPT_NAME'];
print "<a href=\"$yol"."?1=1"."&dosya=$sildosya"."&arti=$arti"."&dil=tr\"> <img class=\"tr\" src=\"png/tr.png\">  </a>";
print "<a href=\"$yol"."?1=1"."&dosya=$sildosya"."&arti=$arti"."&dil=en\"> <img class=\"en\" src=\"png/en.png\">  </a>";

?>