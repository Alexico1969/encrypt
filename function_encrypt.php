<html> 
<head> 
<style> 


</style> 
</head> 
<body> 
<?php

function encrypt($input , $key){
	$output = "";  // create empty output variable
	$array = str_split($input); // split the string ($input) into characters --> make an array of it ($array)
	foreach ($array as $char) {  // loop through $array  (the characters one by one)
		$iGetAscii = ord($char);  // get the ascii value of the character
		
		if ($iGetAscii>64 && $iGetAscii<91){  // if the character is a-z
			$sEncrypted = chr(((($iGetAscii + $key)-64)%26)+64);  //  ** ENCRYPT ! **
			$output=$output.$sEncrypted;  // add to $output  (and build the encrypted string this way char by char)
		} elseif ($iGetAscii>96 && $iGetAscii<123){   // if the character is A-Z
			$sEncrypted = chr(((($iGetAscii + $key)-96)%26)+96);  //  ** ENCRYPT ! **
			$output=$output.$sEncrypted;  // add to $output
		} else {
			return("* INPUT ERROR *");  // if there is a non-alphabetic character in the input string
		}
	}
	return $output;	 // beëindig de functie door $output terug te geven ($output is nu de complete encrypted string
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





