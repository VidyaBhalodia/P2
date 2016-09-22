<html>
<head> 
<title> Password </title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1> Here is your personal XKCD-inspired password </h1>	

<?php require 'logic.php'; ?>
<p class='pwd'>	<?php makePassword($paramters['numberWords'],$paramters['separator'], $paramters['numberSpecCharacters'], $paramters['addNumber']); ?> </p>

<!-- Return button -->
<form method='POST' action='index.php'>
    <input type='submit' value='I Would Like Another Password Please' /><br>
</form>
</body>
</html>