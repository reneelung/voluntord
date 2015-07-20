volunteer hours tracking

<?php print_r($records); ?>

<table>
	<thead>
		<th>Date</th>
		<th>Number of Hours</th>
		<th>Notes</th>
	</thead>
	<?php foreach ($records as $record): ?>
		<tr>
			<?php foreach ($record as $key => $val): ?>
				<td><?php echo $val; ?></td>
			<?php endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>