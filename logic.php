<?php // load file containing a dictionary of the english language 
	$dictionaryFile = file('https://raw.githubusercontent.com/first20hours/google-10000-english/master/google-10000-english.txt', FILE_IGNORE_NEW_LINES);
	$dictionarySize = count($dictionaryFile);
	/* echo $dictionaryFile[rand(0, $dictionarySize)];
	/* print_r($dictionaryFile); */ 
	?>

<?php // generate password - default of 4 words, no spaces
function makePassword($numberWords, $addInteger) {
	global $dictionaryFile;
	global $dictionarySize;
	$passwd = $dictionaryFile[rand(0, $dictionarySize)];
	for($i = 0; $i < ($numberWords-1) ; $i++) {
		$passwd = $passwd."-".$dictionaryFile[rand(0, $dictionarySize)];
		}
		
	if ($addInteger == 1) {
		$passwd = $passwd.'-'.rand(0, 100);
		}
	echo $passwd;
	}
	?>

<?php makePassword(4, 1); ?>
