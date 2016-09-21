<html>
<head> 
<title> Password </title>
</head>
<body>
<h1> Here is your personal XKCD-inspired password </h1>	

<?php require 'logic.php'; ?>
<p>	<?php makePassword($paramters['numberWords'],$paramters['separator'], $paramters['numberSpecCharacters'], $paramters['addNumber']); ?> </p>

<form method='POST' action='index.php'>
    <input type='submit' value='I want to do it again !' /><br>
</form>
</body>
</html>