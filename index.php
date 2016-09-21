<html>
<head>
<title> Problem 2 </title>

</head>

<body>

<h1> Problem 2 - XKCD Password Generator </h1>


<form method='POST' action='logic.php'>
    <b> Enter your parameters here : </b> <br>
    Number of words : <input type='number' name='numberWords' value = 4 min = 1 max = 9 /> (Max 9 Words) <br>
    Choose a separator character  : <input type="radio" name="separator" value="" checked="checked" /> None 
		<input type="radio" name="separator" value="-" /> - Hyphen   
		<input type="radio" name="separator" value="_" /> _ Underscore <br>     
    Number of Special Characters : <input type='number' name='numberSpecCharacters' value = 0 min = 0 max = 9 /> (Max 9 Characters) <br>
<!-- apparently, I need the hidden checkbox or my function complains that I won't send it the right value -->
	<input type='hidden' value='0' name='addNumber'> 	
	<input type="checkbox" name='addNumber' value="Yes" /> Add Numbers <br>
    <input type='submit' value='Create a password' /><br>
</form>





</body>
</html>
