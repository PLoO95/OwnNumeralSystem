<?php    
	/* 
	  Author: Hubert Pysz 
	  Date: 09.11.2020
	   
	  Description: Algorithm convert normal decimal nubmer to your numeral system. Max value is 26 
	  because from a to z we have 26 characters. If you want, try use anather ascii char config, look to table.
		
		
	  Warning: Remember, first char is 0. For example in my config a=0, thats 26 is 'ba' (not 'aa' !!!)
		
	  Parameters:
		$ASCIIstartNumber -> Start char in ASCII table, default it is small 'a' == 97
		$numberSystem -> Default start in 26 'a->z', but you may change to your preferences.
		$clcFrom -> simple print option form $clcFrom to -> $clcTo
	*/

	function calculate($value ,$startChar ,$system){
		$returnValue = '';
		$rest = 0;
		
		if($value == 0)
			return chr($startChar);
		
		while($value != 0) {
			$rest = $value % $system;
			$value = ($value - $rest) / $system;
			
			$returnValue .= chr($rest+$startChar);
		}
		
		return strrev($returnValue);
	}

	$ASCIIstartNumber = 97;
	$numberSystem = 26;
		
	$clcFrom = 24;
	$clcTo = 55;
		
	for($i = $clcFrom; $i < $clcTo; $i++)
		echo $i." = ".calculate($i,$ASCIIstartNumber,$numberSystem)."</br>";

?>
