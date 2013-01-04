<?php ?>
<h3>Chapters for <?php echo $this->item->name; ?></h3>
<?php foreach ($this->chapters as $chapter):?>
	
		<div class="span4">
			<div class="well well-small">
				<h4><?php echo $chapter->name; ?></h4>
				<p><?php echo $chapter->description; ?></p>
				<a href="<?php echo $chapter->url; ?>">View Chapter</a>
			</div>
		</div>
<?php endforeach; ?>
<div class="clearfix"></div>
