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
			<p>You didn't fill out the form completely.  <a href="buyagrade-ex5.html">Try again?</a></p>

			<?php
		} elseif (!isset($_POST['cardnumber'])
				|| ($_POST['cardtype'] == "visa" && !preg_match("/^4/", $_POST['cardnumber']))
				|| ($_POST['cardtype'] == "mastercard" && !preg_match("/^5/", $_POST['cardnumber'] ))
				|| !preg_match("/^\d{4}-?\d{4}-?\d{4}-?\d{4}$/", $_POST['cardnumber'])
				|| !luhn_check($_POST['cardnumber'])) {
			?>

			<h1>Sorry</h1>
			<p>You didn't provide a valid card number.  <a href="buyagrade-ex5.html">Try again?</a></p>

			<?php
		} else {
			?>

			<h1>Thanks, sucker!</h1>
			<p>Your information has been recorded.</p>
			<dl>
				<dt>Name</dt>
				<dd><?= $_POST['name'] ?></dd>
				<dt>Credit Card</dt>
				<dd><?= $_POST['cardnumber'] ?> (<?= $_POST['cardtype'] ?>)</dd>
			</dl>

			<?php
		}
		?>

	</body>
</html>

<?php
# Adaptation of the function shown on Wikipedia:
# <http://en.wikipedia.org/wiki/Luhn_algorithm>
# Licensed under the GNU FDL
function luhn_check($ccnum) {

	$sum = 0;
	# get rid of -'s
	$ccnum = preg_replace("/-/", "", $ccnum);

	for ($i = strlen($ccnum) - 1; $i >= 0; $i--)  {
		# if odd
		if ($i % 2 == 1) {
			# add digit to sum.
			$sum += $ccnum[$i];
		} else {
			# double the digit's value.
			$new_val = 2 * $ccnum[$i];
			# if (doubled value < 10) {
			if ($new_val < 10) {
				# add doubled value to sum.
				$sum += $new_val;
			} else {
				# split doubled value into its two digits.
				# add first digit to sum.
				# add second digit to sum.
				$sum += floor($new_val / 10);
				$sum += $new_val % 10;
			}
		}

	}
	return $sum % 10 == 0;
}
?>
