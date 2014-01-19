<h1>Social - Listing Page</h1>
<table class="table table-striped table-bordered table-hover">
	<?php foreach ($items as $item) : ?>
	<tr>
		<?php foreach($item as $attribute) : ?>
		<td>
			<?php echo $attribute; ?>
		</td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>