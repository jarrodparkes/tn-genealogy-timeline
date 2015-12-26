<?php
	include_once('data.php');
	include_once('header.php');
?>	
<header>
	<h1>Research Timeline: Lincoln, Bedford, Franklin, and Moore County, TN</h1>
</header>
<section id="cd-timeline" class="cd-container">
	<!-- populate timeline from data source -->
	<?php foreach($array as $item) { ?>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-location">
			<img src="img/cd-icon-location.svg" alt="Location">
		</div>

		<div class="cd-timeline-content">
			<h2><?php echo $item['title']; ?></h2>
			<p><?php echo $item['description']; ?></p>
			<a href=<?php echo $item['link']; ?> class="cd-read-more">Read more</a>
			<span class="cd-date"><?php echo date('F j, Y', $item['date']); ?></span>
		</div>
	</div>
    <?php } ?>
</section>
<?php
	include_once('footer.php');
?>