<?php require( 'view/partials/head.php' ); ?>

<h1>My Tasks</h1>
<ul>
	<?php foreach ( $tasks as $task ) : ?>
		<li>

			<?php if ( $task->completed ) : ?>
				<strike><?php echo $task->description; ?></strike>

			<?php else: ?>
				<?php echo $task->description; ?>

			<?php endif; ?>
		</li>

	<?php endforeach; ?>
</ul>

<h1>Submit Your Name</h1>

<input action="name" method="get" action="/names">
	<input name="name">
<button type="submit">Submit</button>
</form>

<?php require( 'view/partials/footer.php' ); ?>
