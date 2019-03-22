<?php
$pass = $_GET['dil'];

if($pass == "tr"){
	
	include("tr.dil");
	
}
elseif($pass == "en"){
	
	include("en.dil");
	
}

?>