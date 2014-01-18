<h1>Highscores - Listing Page</h1>
<ul>
	<?php foreach ($items as $item) : ?>
	<li>
		<pre><?php print_r($item); ?></pre>
	</li>
	<?php endforeach; ?>
</li>