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
		//Shorthand method calling content from associative array pulling key value and value string.
		/*foreach ( $task as $key	=> $item) : */ ?><!--
			<li><strong><?php /*echo $key */ ?> </strong><?php /*echo $item; */ ?></li>
		--><?php /*endforeach; */ ?>
		<h1>Task for the day</h1>
		<?php

		$task_completed = $task['completed'] ? ' Complete' : ' Incomplete';
		//Foreach loop
		foreach ( $task as $key => $feature ) {
			echo '<li><strong>' . ucwords( $key ) . ': ' . $feature . $task_completed . '</strong></li>';
		}

		?>
	</ul>

	<ul>
		<li>Title: <?php echo $task['title']; ?></li>
		<li>Due Date: <?php echo $task['due']; ?></li>
		<li>Person Responsible: <?= $task['name']; ?></li>
		<li>Title: <?php echo $task['title']; ?></li>

		<li>Status: <?php
			if ( $task['completed'] ) {
				echo '&#9994;';
			} else {
				echo '&#9996;';
			} ?>
		</li>

		<li>Status: <?php if ( $task['completed'] ) : ?> {
			<div><span class="icon">&#9994;</span></div>
			<?php else : ?>
			<div><span class="icon">Incomplete</span></div>
			<?php endif ?>
		</li>

		<li>Status:<?php echo $task_completed; ?></li>

		<?php
		if (! true) {
			echo 'Incomplete';
		}
		?>


	</ul>

</header>
</body>
</html>