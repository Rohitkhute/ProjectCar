<?php if(count($errors) > 0): ?>
		<div>
			<?php foreach($errors as $error):?>
				<p><?php echo $error ?></p>
			</div>
		<?php endforeach ?>

		</div>
		<?php endif ?>