<?php
$filetext = "";
if (file_exists("suckers.txt")) {
	$filetext = file_get_contents("suckers.txt");
}

$filetext .= $_POST['name'] . ";" . $_POST['cardnumber'] . ";"
		. $_POST['cardtype'] . "\n";
file_put_contents("suckers.txt", $filetext);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $_POST['name'] ?></dd>

			<dt>Section</dt>
			<dd><?= $_POST['section'] ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $_POST['cardnumber'] ?> (<?= $_POST['cardtype'] ?>)</dd>
		</dl>
		
		<p>Here are all the suckers who have submitted here:</p>
		
		<pre><?= $filetext ?></pre>
	</body>
</html>
