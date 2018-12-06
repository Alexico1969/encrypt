<html> 
<head> 
<style> 


</style> 
</head> 
<body> 
<?php

function encrypt($input , $key){
	$output = "";
	$array = str_split($input);
	foreach ($array as $char) {
		$iGetAscii = ord($char);
		
		if ($iGetAscii>64 && $iGetAscii<91){
			$sEncrypted = chr(((($iGetAscii + $key)-64)%26)+64);
			$output=$output.$sEncrypted;
		} elseif ($iGetAscii>96 && $iGetAscii<123){
			$sEncrypted = chr(((($iGetAscii + $key)-96)%26)+96);
			$output=$output.$sEncrypted;
		} else {
			return("* INPUT ERROR *");
		}
	}
	return $output;	
}

function decrypt($input , $key){
	$output = "";

	//Todo

	return $output;	
}

$original = "Best";
$encrypted = encrypt($original,4);
$decrypted = decrypt($encrypted,4);

echo("Original :".$original."<br/>");  //echo's "Best"
echo("Encrypted :".$encrypted."<br/>"); // echo's "Dguv"
echo("Decrypted :".$decrypted."<br/>"); // echo's "Best" 


?>

</body> 
</html>





