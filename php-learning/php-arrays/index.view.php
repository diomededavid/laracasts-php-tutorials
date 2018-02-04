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
			text-align: left;
		}
	</style>
</head>
<body>
<header>
	<ul>

		<?php
		//Echoing an Anonymous functions
        echo $makeGreeting( "Dave", "morning" ) . "<br>";

        //Shorthand method
		foreach ($animals as $animal) : ?>
			<li><?php echo $animal; ?></li>
		<?php endforeach; ?>

		<?php
		//Longhand method - my preferred method
			foreach ($animals as $animal) {
				echo '<li>' . $animal . '</li>';
			}
		?>

	</ul>



</header>
</body>
</html>