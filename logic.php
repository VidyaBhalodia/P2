<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php // load file containing a dictionary of the most common words as determined via google searches.  
	$dictionaryFile = file('https://raw.githubusercontent.com/first20hours/google-10000-english/master/google-10000-english.txt', FILE_IGNORE_NEW_LINES);
	$dictionarySize = count($dictionaryFile);
	/* echo $dictionaryFile[rand(0, $dictionarySize)];
	/* print_r($dictionaryFile); */ 
	?>

<?php // save the post content as a new variable. 
$paramters = $_POST; 
?>

<?php  if (is_numeric($paramters['numberWords']) == FALSE) {
		echo $parameters['numberWords'];
		echo "Error - Invalid Number of Words. Reverting to Default of 4 Words";
		$paramters['numberWords'] = 4;
		}
	elseif ($paramters['numberWords'] > 9) {
		echo "Error - Maximum Number of Allowed Words is 9. Setting Number of Words to 9"; 
		$paramters['numberWords'] = 9;
		}
	elseif ($paramters['numberWords'] < 1) {
		echo "Error - Minimum Number of Words Needed is 1. Setting Number of Words to 1" ;
		$paramters['numberWords'] = 1;	
	}
?>

<?php  if (is_numeric($paramters['numberSpecCharacters']) == FALSE) {
		echo "Error - Invalid Number of Special Characters. Reverting to Default of 0 Special Characters";
		$paramters['numberSpecCharacters'] = 0;
		}
	elseif ($paramters['numberSpecCharacters'] > 9) {
		echo "Error - Maximum Number of Special Characters Words is 9. Setting Number of Special Characters to 9"; 
		$paramters['numberSpecCharacters'] = 9;
		}
	elseif ($paramters['numberSpecCharacters'] < 0) {
		echo "Error - Minimum Number of Special Characters is 0. Setting Number of Special Characters to 0" ;
		$paramters['numberSpecCharacters'] = 0;
	}
?>

	
<?php // generate password - default of 4 words, no spaces
function makePassword($numberWords, $separator, $numberSpecCharacters, $addInteger) {
	global $dictionaryFile;
	global $dictionarySize;
	$passwd = $dictionaryFile[rand(0, $dictionarySize)];

	// create an array with a list of special characters  
	$specialCharacters =  array("!", "@", "#", "$", "%", "^", "&", "*", "/", "|" ); 
	
	// concatenate our word list 
	for($i = 0; $i < ($numberWords-1) ; $i++) {
		$passwd = $passwd.$separator.$dictionaryFile[rand(0, $dictionarySize)];
		}
	// add optional (randomly selected) special characters
	if ($numberSpecCharacters >= 1) {
		$passwd = $passwd.$separator;
		for($i = 0; $i < ($numberSpecCharacters) ; $i++) {
			$passwd = $passwd.$specialCharacters[rand(0, 9)];
			}
		}
	//	add optional (randomly selected number (0 - 100)
	if ($addInteger == "Yes") {
		$passwd = $passwd.$separator.rand(0, 100);
		}
	echo $passwd;
	}
	?>
