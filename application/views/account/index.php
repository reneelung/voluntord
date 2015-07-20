<?php if ($set_password): ?>
<form method='POST'><input name='password' type='text'/><button>Submit</button></form>
<?php endif; ?>
<?php if ($user): ?>
	<?php foreach ($user as $key => $val): ?>
		<?php echo $key ?> : <?php echo $val ?> </br>
	<?php endforeach; ?>
<?php endif; ?>