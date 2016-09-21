<?php // load file containing a dictionary of the english language 
	$dictionaryFile = file('https://raw.githubusercontent.com/first20hours/google-10000-english/master/google-10000-english.txt', FILE_IGNORE_NEW_LINES);
	$dictionarySize = count($dictionaryFile);
	/* echo $dictionaryFile[rand(0, $dictionarySize)];
	/* print_r($dictionaryFile); */ 
	?>

	
<?php // save the post content as a new variable. 
$paramters = $_POST; ?>

<?php 
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

	<?php makePassword($paramters['numberWords'],$paramters['separator'], $paramters['numberSpecCharacters'], $paramters['addNumber']); ?>

<form method='POST' action='index.php'>
    <input type='submit' value='That was fun, I want to do it again !' /><br>
</form>
