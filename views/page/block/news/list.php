<ul>
<?php foreach (Model_Product::all() as $item) : ?>
	<li><a href="<?php echo $item->link(); ?>"><?php echo $item->name; ?></a></li>
<?php endforeach; ?>
</ul>