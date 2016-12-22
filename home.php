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
		<main id="pb-root" class="site-main container-fluid" role="main" style="min-height: 100px;">

			<!--<section class="row">
				<div class="col-sm-12" style="height: 90px; margin: 20px 0; text-align: center;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

				<ins class="adsbygoogle"
				     style="display:inline-block;width:970px;height:90px"
				     data-ad-client="ca-pub-7167863529667065"
				     data-ad-slot="8683535894"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</div>
			</section>-->


			<section class="row first-row" style="margin-top: 20px;">
				<div class="col-md-6 hero-wrap">


					<!--===================== #Hero ==========================-->
						<?php
						$args = array( 'numberposts' => 1, 'offset' => 0 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>

						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<div class="b-lazy" id="hero" data-src="<?php the_post_thumbnail_url('full'); ?>"> <!--#-->

							<div class="blurry" style="background-image: url('<?php the_post_thumbnail_url('blurry'); ?>')"></div>
						</div>
						</a>
						<h1 class="hero-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>


						<?php endforeach; ?>





					<!--===================== #Sub Hero ==========================-->


					<div class="sub-hero">

						<?php $args = array( 'numberposts' => 3, 'offset' => 1 );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
							<div class="sub-hero_item" >
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<div class="sub-hero_image b-lazy" data-src="<?php the_post_thumbnail_url('full'); ?>" data-src-small="<?php the_post_thumbnail_url('medium'); ?>">
									<div class="blurry" style="background-image: url('<?php the_post_thumbnail_url('blurry'); ?>')"></div>
								</div>
								<div class="title-box">
									<?php the_title(); ?>
								</div>
								</a>
							</div>

						<?php endforeach; ?>


					</div>




					<!--===================== #Latest News ==========================-->

				</div>
				<div class="col-md-6 latest-news-wraper">
					<div class="row latest-news-row">
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

									<li>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a>
										<div class="_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div></li>

									<?php endforeach; ?>

									<?php
									$args = array( 'numberposts' => 10 );
									$lastposts = get_posts( $args );
									foreach($lastposts as $post) : setup_postdata($post); ?>

									<li><h3><?php the_title(); ?></h3><div class="_time"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div></li>

									<?php endforeach; ?>

									<li class="read-more">
										<a href="#">Read More</a>
									</li>

								</ul>
							</div>

						</div>



						<!--===================== #Hero Sidebar ==========================-->
						<div class="col-sm-6">
							<div class="row" style="padding-left: 10px; overflow: hidden;">
								<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
									<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
										<?php dynamic_sidebar( 'home_right_1' ); ?>
									</div><!-- #primary-sidebar -->
								<?php endif; ?>
							</div>




						</div>







					</div>

				</div>
			</section>


		</main><!-- #main -->




		<!--===================== #Opinion -pane ==========================-->

		<section class="pb-root container-fluid sub-section-wrapper">

				<div class="col-md-9">
					<section class="row .lll">
					<div class="title-header" style="display: inline-block; padding-right: 20px;">Metro</div>

					fdfd

					</section>
				</div>





				<div class="col-md-3">sdsd</div>

		</section>


		<!--===================== #video-pane ==========================-->

		<section class="video-pane-wrapper">
			<h1 class="video-pane-wrapper_title pb-root container-fluid"><span>Punch</span>videos</h1>
			<div class="pb-root container-fluid video-pane">

				<div class="col-sm-8">
					<div class="row">



						<div data-type="vimeo" data-video-id="195433452"></div>






					</div>
				</div>
				<div class="col-sm-4">
					<div class="video--playlist">
						<div class="title-header">Explore More</div>
						<ul>
							<li><a href="#">nigerian recession compress</a></li>
							<li><a href="#">nigerian recession compress</a></li>
							<li><a href="#">nigerian recession compress</a></li>
						</ul>
					</div>
				</div>

			</div>
		</section>


		<!--===================== #Categories ==========================-->

		<section class="pb-root container-fluid category-pane-wrapper">
			<div class="category-pane">


				<!-- #Items -->


				<?php if ( is_active_sidebar( 'main-cat' )  ) : ?>

						<?php dynamic_sidebar( 'main-cat' ); ?>

				<?php endif; ?>




			</div>
		</section>



	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
