<?php if ($user): ?>
	<?php foreach ($user as $key => $val): ?>
		<?php echo $key ?> : <?php echo $val ?> </br>
	<?php endforeach; ?>
<?php endif; ?>