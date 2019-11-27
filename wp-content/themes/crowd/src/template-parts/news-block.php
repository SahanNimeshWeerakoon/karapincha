<?php
	$news = meta_get_option('news');
	if (isset($news) && $news != '') {
		array_splice($news, 0, 0);

		$first_news = $news[0];
		$first_news_tags = get_meta_tags($first_news['link']);
		// $news_1_json_link = $first_news['link'].'?format=json';
		// $content = file_get_contents($news_1_json_link);
		// $ff = json_decode(str_replace('])}while(1);</x>', '', $content), true);
		// var_dump($ff);
		// echo $content;
		// $content = file_get_contents($first_news['link']);

		$second_news = $news[1];
		if ($second_news != '') {$second_news_tags = get_meta_tags($second_news['link']);};

		$third_news = $news[2];
		if ($third_news != '') {$third_news_tags = get_meta_tags($third_news['link']);};

		$fourth_news = $news[3];
		if ($fourth_news != '') {$fourth_news_tags = get_meta_tags($fourth_news['link']);};
	}

?>

<?php if ($news != '' || $news != NULL) { ?>
<!-- Blokk News Block A -->
<section class="news-block blokk-news-block-a">
	<div class="container">
		
		<!-- Section Title -->
		<div class="section-title blokk-section-title-a mb50">
			<!-- Title -->
			<h2 class="title"><?php echo meta_get_option('news_and_blog_title'); ?></h2><!-- // Title -->
		</div><!-- // Section Title -->

		<!-- Blokk cards list -->
		<div class="blokk-cards-list-a">
			<div class="row">
				<div class="col col-xs-4 col-sm-4 col-md-4">
					<?php if($first_news != '') : ?>
					<!-- Blokk Card B -->
					<div class="blokk-card-b">
						<!-- Thumbnail -->
						<div class="card-thumbnail">
							<!-- Image -->
							<img src="<?php echo $first_news_tags['twitter:image:src']; ?>" alt="<?php echo $first_news_tags['title']; ?>"><!-- // Image -->

							<!-- Icon -->
							<!-- <span class="icon"><i class="fa fa-twitter"></i></span> --><!-- // Icon -->
						</div><!-- // Thumbnail -->

						<!-- Card Data -->
						<div class="card-data">
							
							<!-- Credits -->
							<div class="credits">
								<span><?php echo $first_news['date'];?></span>
								<span>|</span>
								<span>by <?php echo $first_news['author'];?></span>
							</div><!-- // Credits -->

							<!-- Title -->
							<div class="title">
								<h2><a target="_blank" href="<?php echo $first_news['link'];?>"><?php echo limit_words($first_news_tags['title'], 55); ?></a></h2>
							</div><!-- // Title -->

							<!-- Description -->
							<div class="description">
								<p><?php echo limit_words($first_news_tags['description'], 100); ?></p>
								<a target="_blank" href="<?php echo $first_news['link'];?>">Read More</a>
							</div><!-- // Description -->
						</div><!-- // Card Data -->
					</div><!-- // Blokk Card B -->
					<?php endif; ?>
				</div><!-- ./col -->
				
				<div class="col col-xs-4 col-sm-4 col-md-4">
					<?php if($second_news != '') : ?>
					<!-- Blokk Card B -->
					<div class="blokk-card-b">
						<!-- Card Data -->
						<div class="card-data">
							
							<!-- Credits -->
							<div class="credits">
								<span><?php echo $second_news['date'];?></span>
								<span>|</span>
								<span>by <?php echo $second_news['author'];?></span>
							</div><!-- // Credits -->

							<!-- Title -->
							<div class="title">
								<h2><a target="_blank" href="<?php echo $second_news['link'];?>"><?php echo limit_words($second_news_tags['title'], 55); ?></a></h2>
							</div><!-- // Title -->

							<!-- Description -->
							<div class="description">
								<p><?php echo limit_words($second_news_tags['description'], 90); ?></p>
								<a target="_blank" href="<?php echo $second_news['link'];?>">Read More</a>
							</div><!-- // Description -->
						</div><!-- // Card Data -->
					</div><!-- // Blokk Card B -->
					<?php endif; ?>
					
					<?php if($third_news != '') : ?>
					<!-- Blokk Card B -->
					<div class="blokk-card-b">
						<!-- Card Data -->
						<div class="card-data">
							
							<!-- Credits -->
							<div class="credits">
								<span><?php echo $third_news['date'];?></span>
								<span>|</span>
								<span>by <?php echo $third_news['author'];?></span>
							</div><!-- // Credits -->

							<!-- Title -->
							<div class="title">
								<h2><a target="_blank" href="<?php echo $third_news['link'];?>"><?php echo limit_words($third_news_tags['title'], 55); ?></a></h2>
							</div><!-- // Title -->

							<!-- Description -->
							<div class="description">
								<p><?php echo limit_words($third_news_tags['description'], 90); ?></p>
								<a target="_blank" href="<?php echo $third_news['link'];?>">Read More</a>
							</div><!-- // Description -->
						</div><!-- // Card Data -->
					</div><!-- // Blokk Card B -->
					<?php endif; ?>
				</div><!-- ./col -->

				<div class="col col-xs-4 col-sm-4 col-md-4">
					<?php if($fourth_news != '') : ?>
					<!-- Blokk Card B -->
					<div class="blokk-card-b">
						<!-- Thumbnail -->
						<div class="card-thumbnail">
							<!-- Image -->
							<img src="<?php echo $fourth_news_tags['twitter:image:src']; ?>" alt="<?php echo $fourth_news_tags['title']; ?>"><!-- // Image -->

							<!-- Icon -->
							<!-- <span class="icon"><i class="fa fa-twitter"></i></span> --><!-- // Icon -->
						</div><!-- // Thumbnail -->

						<!-- Card Data -->
						<div class="card-data">
							
							<!-- Credits -->
							<div class="credits">
								<span><?php echo $fourth_news['date'];?></span>
								<span>|</span>
								<span>by <?php echo $fourth_news['author'];?></span>
							</div><!-- // Credits -->

							<!-- Title -->
							<div class="title">
								<h2><a target="_blank" href="<?php echo $fourth_news['link'];?>"><?php echo limit_words($fourth_news_tags['title'], 55); ?></a></h2>
							</div><!-- // Title -->

							<!-- Description -->
							<div class="description">
								<p><?php echo limit_words($fourth_news_tags['description'], 100); ?></p>
								<a target="_blank" href="<?php echo $fourth_news['link'];?>">Read More</a>
							</div><!-- // Description -->
						</div><!-- // Card Data -->
					</div><!-- // Blokk Card B -->
					<?php endif; ?>
				</div><!-- ./col -->
			</div><!-- ./row -->
		</div><!-- // Blokk cards list -->
	</div><!-- ./container -->
</section><!-- // Blokk News Block A -->
<?php } ?>