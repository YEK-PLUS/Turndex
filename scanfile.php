<?php
include ("url2.php");
include ("dilsec.php");
$dizin_adi = $nokök."./";
$arti= $_GET['arti'];
$dosya ="$dizin_adi$arti" ;
$dizin = opendir ($dosya);
while ( gettype ( $bilgi = readdir( $dizin ) ) != boolean ) {
if ( is_file( "$dosya/$bilgi" ) ){
		$file = "$dosya/$bilgi" ;
	$uzanti = pathinfo($file);
	$uzanti = $uzanti['extension'];
	if ( file_exists ( "png/$uzanti.png" ) ){

print ("<img src=\"png/$uzanti.png\" width=\"20\" height=\"22\">  </a>"); 
print ("<A href=\"$dosya/$bilgi\">$bilgi</A>\n");
print ("<a href=\"dosyasil.php?dosya=$dosya/$bilgi&dil=$pass\"> <img src=\"png/sil.png\" align=right  </a>");
	print ("<br>");}
	else{
		
		print ("<img src=\"png/generic.png\">  </a>"); 
		print ("<a href=\"$dosya/$bilgi\">$bilgi</A>\n");
		print ("<a href=\"dosyasil.php?dosya=$dosya/$bilgi&dil=$pass\"> <img src=\"png/sil.png\" align=right  </a>");
		print ("<br>");
		
	}
}
}
closedir ($dizin);
?>