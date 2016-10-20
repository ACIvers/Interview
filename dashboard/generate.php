<?php 

// Script Name: Random String Generator
// Script Author: Arif Billah
// Script Author URI: https://www.facebook.com/abillahbd
// Script License: RANDOM STRING GENERATOR BY ARIF BILLAH IS FREE TO USE. ANYBODY CAN USE THIS SCRIPT FOR THREIR PERSONAL USAGE. HOWEVER SELLING OR RENTING THIS SCRIPT IS PROHIBITED.

function numToString($number='') {
	$rtn = '';
	if (!isset($number)||$number==''||!is_numeric($number)) {
		$rtn = "<b>Error: </b> an interger 'number' must be passed";
	} elseif ($number > 62 || $number < 1) {
		$rtn = "<b>Error: </b> passed 'number' must be between 1 to 62 (a-zA-Z0-9)";
	} else {
		switch ($number) {
			case 1:
				$rtn = 'a';
				break;
			case 2:
				$rtn = 'b';
				break;
			case 3:
				$rtn = 'c';
				break;
			case 4:
				$rtn = 'd';
				break;
			case 5:
				$rtn = 'e';
				break;
			case 6:
				$rtn = 'f';
				break;
			case 7:
				$rtn = 'g';
				break;
			case 8:
				$rtn = 'h';
				break;
			case 9:
				$rtn = 'i';
				break;
			case 10:
				$rtn = 'j';
				break;
			case 11:
				$rtn = 'k';
				break;
			case 12:
				$rtn = 'l';
				break;
			case 13:
				$rtn = 'm';
				break;
			case 14:
				$rtn = 'n';
				break;
			case 15:
				$rtn = 'o';
				break;
			case 16:
				$rtn = 'p';
				break;
			case 17:
				$rtn = 'q';
				break;
			case 18:
				$rtn = 'r';
				break;
			case 19:
				$rtn = 's';
				break;
			case 20:
				$rtn = 't';
				break;
			case 21:
				$rtn = 'u';
				break;
			case 22:
				$rtn = 'v';
				break;
			case 23:
				$rtn = 'w';
				break;
			case 24:
				$rtn = 'x';
				break;
			case 25:
				$rtn = 'y';
				break;
			case 26:
				$rtn = 'z';
				break;
			case 27:
				$rtn = 'A';
				break;
			case 28:
				$rtn = 'B';
				break;
			case 29:
				$rtn = 'C';
				break;
			case 30:
				$rtn = 'D';
				break;
			case 31:
				$rtn = 'E';
				break;
			case 32:
				$rtn = 'F';
				break;
			case 33:
				$rtn = 'G';
				break;
			case 34:
				$rtn = 'H';
				break;
			case 35:
				$rtn = 'I';
				break;
			case 36:
				$rtn = 'J';
				break;
			case 37:
				$rtn = 'K';
				break;
			case 38:
				$rtn = 'L';
				break;
			case 39:
				$rtn = 'M';
				break;
			case 40:
				$rtn = 'N';
				break;
			case 41:
				$rtn = 'O';
				break;
			case 42:
				$rtn = 'P';
				break;
			case 43:
				$rtn = 'Q';
				break;
			case 44:
				$rtn = 'R';
				break;
			case 45:
				$rtn = 'S';
				break;
			case 46:
				$rtn = 'T';
				break;
			case 47:
				$rtn = 'U';
				break;
			case 48:
				$rtn = 'V';
				break;
			case 49:
				$rtn = 'W';
				break;
			case 50:
				$rtn = 'X';
				break;
			case 51:
				$rtn = 'Y';
				break;
			case 52:
				$rtn = 'Z';
				break;
			case 53:
				$rtn = '0';
				break;
			case 54:
				$rtn = '1';
				break;
			case 55:
				$rtn = '2';
				break;
			case 56:
				$rtn = '3';
				break;
			case 57:
				$rtn = '4';
				break;
			case 58:
				$rtn = '5';
				break;
			case 59:
				$rtn = '6';
				break;
			case 60:
				$rtn = '7';
				break;
			case 61:
				$rtn = '8';
				break;
			case 62:
				$rtn = '9';
				break;
		}
	}
	return $rtn;
}
	
function cc_rand($length=8) {
	$rtn = '';

	if (!is_numeric($length)) {
		$rtn = "<b>Error: </b>'length' parameter expects integer numbers only";
	} else {

		for ($x=0;$x<$length;$x++) {
			$rtn .= numToString(rand(1,62));
		}
	}

	return $rtn;
}

?>