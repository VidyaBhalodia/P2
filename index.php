<html>
<head>
	<title> Problem 2 </title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>XKCD Password Generator </h1>

<a href = "https://xkcd.com/936/"><img src = "https://imgs.xkcd.com/comics/password_strength.png" width=33%></a>

<table>
<tr><td>
<form method='POST' action='password.php' class = 'myform'>
    <h2> Enter your parameters here : </h2> <br>
    <label>Number of words : </label><input type='number' name='numberWords' value = 4 min = 1 max = 9 /> <label>(Max 9 Words)</label> <br>
    <label>Choose a separator character  : </label><input type="radio" name="separator" value="" checked="checked" /> <label>None </label>
		<input type="radio" name="separator" value="-" /> <label>- Hyphen  </label> 
		<input type="radio" name="separator" value="_" /> <label>_ Underscore </label><br>     
    <label>Number of Special Characters : </label><input type='number' name='numberSpecCharacters' value = 0 min = 0 max = 9 /> <label>(Max 9 Characters)</label>( <br>
<!-- apparently, I need the hidden checkbox or my function complains that I won't send it the right value -->
	<input type='hidden' value='0' name='addNumber'> 	
	<input type="checkbox" name='addNumber' value="Yes" /> <label>Add Numbers </label><br>
	<br>
    <input type='submit' value='Create a password' /><br>
</form>
</td></tr>
</table>



</body>
</html>
