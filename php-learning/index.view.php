<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 8/29/17
 * Time: 10:04 AM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
<header>
	<ul>

		<?php
		//Shorthand method
		foreach ($animals as $animal) : ?>
			<li><?php echo $animal; ?></li>
		<?php endforeach; ?>

		<?php
		//Shorthand method
			foreach ($animals as $animal) {
				echo '<li>' . $animal . '</li>';
			}
		?>


	</ul>

</header>
</body>
</html>