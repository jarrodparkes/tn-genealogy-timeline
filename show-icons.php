<?php
	include_once('selected-icon-data.php');
	include_once('header.php');
?>	
<header>
	<h1>Research Timeline: Lincoln, Bedford, Franklin, and Moore County, TN</h1>
</header>

<section id="cd-timeline" class="cd-container">

	<!-- populate timeline from data source -->
	<?php foreach($icons as $item) { ?>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-icon">
			<img src=<?php echo $item['url']; ?> alt=<?php echo $item['alt']; ?>>
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2><?php echo $item['title']; ?></h2>			
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->		
    <?php } ?>

</section> <!-- cd-timeline -->
<?php
	include_once('footer.php');
?>