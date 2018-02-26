<?php
//Change this to whatever you want
require_once('inc/content.php');
//variables
$meta_title = 'PHP Static Blog';
$is_home = true;
?>
<?php require_once('inc/header.php'); ?>
	<div class="container-fluid">
		<h1>Easy to use PHP Static Blog</h1>

		<div class="content-container">
			<div class="flex flex-wrap">
					<?php $i=0; foreach ($php_blog['items'] as $title => $content) {
						//This takes the first 100 characters of the 'description' array in the content file. Will display the first 100 characters then add '...', effectively making a cpation/blurp.
						$short_description = substr($content['description'], 0, 100).'...';
						//Creating image variable
						$img = $content['img'];
						?>
						<div class="item">
							<div class="content">
								<a href="single.php?blog_item=<?php
								//If there is a space between the title wording this will add a '_' so that it will URL friendly
								echo str_replace(' ', '_',$title); ?>">
								<div class="image" style="background-image: url(../img/<?php echo $img; ?>)"></div></a>
								<p class="title"><?php echo $title; ?></p>
								<p class="description"><?php echo $short_description; ?></p>
								<a class="learn-more button" href="single.php?blog_item=<?php echo str_replace(' ', '_',$title); ?>">Read More</a>
							</div><!-- .content -->
						</div><!-- .members-item -->
					<?php $i++; }  ?>
				</div><!-- .flex -->
			</div><!-- .content-container -->
	</div><!-- .container-fluid -->
<?php require_once('inc/footer.php'); ?>
