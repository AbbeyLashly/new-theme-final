<?php
/**
 * The main template file.
 * Template Name: Home Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package punchtheme
 */

get_header(); ?>


<!--<section id="pb-root" class="container-fluid">

</section> -->

	<div id="primary" class="content-area">
		<main id="pb-root" class="site-main container-fluid" role="main" style="min-height: 1800px;">

		<!--	<section class="row">
				<div class="col-sm-12" style="height: 90px; margin: 20px 0; text-align: center;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Large Leaderboard
				<ins class="adsbygoogle"
				     style="display:inline-block;width:970px;height:90px"
				     data-ad-client="ca-pub-7167863529667065"
				     data-ad-slot="8683535894"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</div>
			</section> -->


			<section class="row first-row" style="margin-top: 20px;">
				<div class="col-sm-6">

					<div class="" id="hero">

						<?php
						$args = array( 'numberposts' => 1 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<div class="title-box">
							<h1><?php the_title(); ?></h1>
							<div class="title-author">
								by <a href="#">Kelvin Bawa</a>
							</div>
						</div>
						<img class="b-lazy" src="<?php the_post_thumbnail_url('blurry'); ?>" data-src="<?php the_post_thumbnail_url('full'); ?>" data-src-small="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" />

						<?php endforeach; ?>

					</div>

					<div class="sub-hero">

						<?php $args = array( 'numberposts' => 3, 'offset' => 1 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
							<div class="sub-hero_item" >
								<div class="sub-hero_image b-lazy" data-src="<?php the_post_thumbnail_url('full'); ?>">
									<div class="blurry" style="background-image: url('<?php the_post_thumbnail_url('blurry'); ?>')"></div>
								</div>
								<div class="title-box">
									<?php the_title(); ?>
								</div>

							</div>

						<?php endforeach; ?>


					</div>





				</div>
				<div class="col-sm-6">
					<div class="row" style="height: 100%; position: absolute; width: 100%;">
						<div class="col-sm-6 latest-news">
							<div class="row" style="height: 100%;">
								<div class="title-header">
									Just in
								</div>
								<ul>

									<?php
									$args = array( 'numberposts' => 10 );
									$lastposts = get_posts( $args );
									foreach($lastposts as $post) : setup_postdata($post); ?>

									<li><h3><?php the_title(); ?></h3><div class="_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div></li>

									<?php endforeach; ?>

									<?php
									$args = array( 'numberposts' => 10 );
									$lastposts = get_posts( $args );
									foreach($lastposts as $post) : setup_postdata($post); ?>

									<li><h3><?php the_title(); ?></h3><div class="_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div></li>

									<?php endforeach; ?>

								</ul>
							</div>

						</div>


						<div class="col-sm-6">content</div>
					</div>

				</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
