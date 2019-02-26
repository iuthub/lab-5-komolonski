<!DOCTYPE html>
<html>
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>

	<?php
	if (!isset($_POST['name']) || !isset($_POST['section'])
			|| !isset($_POST['cardnumber']) || !isset($_POST['cardtype'])
			|| !$_POST['name'] || !$_POST['section']
			|| !$_POST['cardnumber'] || !$_POST['cardtype']) {
		?>

		<h1>Sorry</h1>
		<p>You didn't fill out the form completely.  <a href="buyagrade-ex4.html">Try again?</a></p>

		<?php
	} else {
		?>

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

		<?php
	}
	?>

	</body>
</html>
