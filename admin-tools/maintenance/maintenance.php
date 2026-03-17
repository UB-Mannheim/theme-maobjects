<?php echo head(array('title' => "Site Under Maintenance", 'bodyclass' => 'maintenance-mode')); ?>

<div id="maintenance_outer">
	<div id="maintenance_middle">
		<div id="maintenance_inner" class="maintenance_text">
			<h2><?php echo get_option('site_title'); ?></h2>
			<h1 class="centered"><?php echo get_option('admin_tools_maintenance_title'); ?></h1>
			<p><?php echo get_option('admin_tools_maintenance_message'); ?> </p>
		</div>
	</div>
</div>

<?php echo foot(); ?>
