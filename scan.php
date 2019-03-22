<?php
include ("dilsec.php");
include ("url.php");
$dizin_adi = $nokök."./";
$arti= $_GET['arti'];
$dosya ="$dizin_adi$arti" ;
$dizin = opendir ($dosya);
while ( gettype ( $bilgi = readdir( $dizin ) ) != boolean ) {
if ( is_dir( "$dosya/$bilgi" ) ){
print ("<img src=\"png/dir.ico\" width=\"20\" height=\"22\">  </a>"); 
print ("<A href=\"index.php?arti=$arti/$bilgi&dil=$pass\">$bilgi</A>\n");
print ("<a href=\"sil.php?dosya=$dosya/$bilgi&dil=$pass\"> <img src=\"png/sil.png\" align=right  </a>");
print ("<br>");

}
}
closedir ($dizin);
?>