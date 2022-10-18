<?php /** * Template Name: Service-page.php * Description: Add features to themes */ ?>
<?php get_header(); ?>

<!-- true cloud start -->
<?php if (have_rows( 'two_column_grid_content')): while (have_rows( 'two_column_grid_content')): the_row(); if (get_row_layout()=='two_column_grid_content_1' ): ?>
	<section id="true-cloud" class="true-cloud">
		<div class="container">
			<div class="two-column-block aos-init" data-aos="fade-up" data-aos-duration="1000">
				<?php if( have_rows( 'two_column_grid_group') ): ?>
				<?php while( have_rows( 'two_column_grid_group') ): the_row(); ?>
				<div class="equal-block pe-sm-2">
					<h2><?php $field('two_column_grid_header'); ?></h2>
					<p class="pe-sm-5">
					<?php $field( 'two_column_grid_description'); ?>
					</p>
				</div>
				<div class="equal-block ps-sm-3 aos-init" data-aos="fade-up" data-aos-duration="1000">
					<?php if (have_rows( 'brand_container')): ?>
						<ul class="brand-container">
							<?php while (have_rows( 'brand_container')): the_row();
							?>
							<li> 
								<?php echo imagetag('brand_image', 'brand_logo', '197', '57', 'lazyload') ?>
							</li>
							<?php endwhile; ?> 
						</ul>
					<?php endif;?>
				</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</section>
<?php endif; endwhile; endif;?> 
<!-- true cloud end -->


<?php get_footer(); ?>