﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<title>docflo7</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
<?php
// affiche le numéro de version courante du PHP.
echo 'Version PHP courante : ' . phpversion() . "\n";

// affiche e.g. '2.0' ou rien du tout si cette extension n'est pas active
echo phpversion('tidy');
?>
	</body>
</html>
