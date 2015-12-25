<?php
	include_once('data.php');
	include_once('header.php');
?>	
<header>
	<h1>Research Timeline: Lincoln, Bedford, Franklin, and Moore County, TN</h1>
</header>

<section id="cd-timeline" class="cd-container">

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-location">
			<img src="img/cd-icon-location.svg" alt="Location">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>1800</h2>
			<span class="cd-date">1800</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<!-- populate timeline from data source -->
	<?php foreach($array as $item) { ?>
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-location">
			<img src="img/cd-icon-location.svg" alt="Location">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2><?php echo $item['title']; ?></h2>
			<p><?php echo $item['description']; ?></p>
			<a href=<?php echo $item['link']; ?> class="cd-read-more">Read more</a>
			<span class="cd-date"><?php echo $item['date']; ?></span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->		
    <?php } ?>
	
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="img/cd-icon-picture.svg" alt="Picture">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Title of section 3</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
			<a href="#0" class="cd-read-more">Read more</a>
			<span class="cd-date">Jan 24</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-location">
			<img src="img/cd-icon-location.svg" alt="Location">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Title of section 4</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			<a href="#0" class="cd-read-more">Read more</a>
			<span class="cd-date">Feb 14</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-location">
			<img src="img/cd-icon-location.svg" alt="Location">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Title of section 5</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
			<a href="#0" class="cd-read-more">Read more</a>
			<span class="cd-date">Feb 18</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->

	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-movie">
			<img src="img/cd-icon-movie.svg" alt="Movie">
		</div> <!-- cd-timeline-img -->

		<div class="cd-timeline-content">
			<h2>Final Section</h2>
			<p>This is the content of the last section</p>
			<span class="cd-date">Feb 26</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->
</section> <!-- cd-timeline -->
<?php
	include_once('footer.php');
?>