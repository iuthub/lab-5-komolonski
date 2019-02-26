<!DOCTYPE html>
<html>
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link rel="stylesheet" href="buyagrade.css" />
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
	</body>
</html>
