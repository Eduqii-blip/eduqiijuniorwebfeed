<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>End Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="../../../../../../../images/favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div id="end" class="flex-center flex-column">
		<h1 id="finalScore">0</h1>
		<form  class="end-form-container">
			<h2 id="end-text">Enter your name below to save your score!</h2>
			<input type="text" name="name" id="username" placeholder="Enter your name">
			<button class="btn" id="saveScoreBtn" type="submit" onclick="saveHighScore(event)" disabled="disabled">Save</button>
		</form>
		<a href="game.html" class="btn">Play Again</a>
		<a href="index.html" class="btn">Go Home <i class="fas fa-home"></i></a>
	</div>
</div>

<script type="text/javascript" src="end.js"></script>
</body>
</html>