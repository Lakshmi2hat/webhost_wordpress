<?php /** * Template Name: front-page.php * Description: Add features to themes */ ?>
<?php get_header(); ?>
<!-- banner section start -->
<?php if (have_rows( 'banner_section')): while (have_rows( 'banner_section')): the_row(); if (get_row_layout()=='Banner' ): ?>
	<section class="banner-section aos-init" id="banner-section" data-aos="fade-up" data-aos-duration="1000">
	<div class="container">
		<?php if (have_rows( 'banner_tab_section')): ?>
		<?php while (have_rows( 'banner_tab_section')): the_row(); ?>
		<?php if (have_rows( 'banner_tab_nav')): ?>
		<ul class="nav nav-pills" id="pills-tab" role="tablist">
		<?php $i=0 ; ?>
		<?php while (have_rows( 'banner_tab_nav')): the_row(); ?>
		<?php $i++; ?>
		<li class="nav-item">
			<a class="nav-link <?php if($i == 1){echo 'active';} ?>" id="tab_nav_link_id_<?php echo $i; ?>" data-toggle="pill" href="#tab_nav_content_id_<?php echo $i; ?>" role="tab" aria-controls="tab_nav_content_id_<?php echo $i; ?>" aria-selected="true">
			<?php $field( 'tab_nav_item_links'); ?>
			</a>
		</li>
		<?php endwhile; ?> </ul>
		<div class="tab-content" id="pills-tabContent">
		<?php $i=0 ; ?>
		<?php while (have_rows( 'banner_tab_nav')): the_row(); ?>
		<?php $i++; ?>
		<div class="tab-pane fade <?php if($i == 1){echo 'active show';} ?>" id="tab_nav_content_id_<?php echo $i; ?>" role="tabpanel" aria-labelledby="tab_nav_link_id_<?php echo $i; ?>">
			<div class="two-column-block">
			<div class="equal-block pe-sm-2">
				<h1><?php $field('tab_nav_content_header'); ?></h1>
				<p>
				<?php $field( 'tab_nav_content_description'); ?>
				</p>
				<?php
					$link1 = get_sub_field('create_account_button');
					$link2 = get_sub_field('choose_plan_button');
				?>
				<div class="button-group">
					<a class="btn primary-btn" href="<?php echo $link1['url'] ?>">
						<?php echo $link1['title']; ?>
					</a>
					<a class="btn outline-btn" href="<?php echo $link2['url'] ?>">
					<?php echo $link2['title']; ?>
					</a>
				</div>
			</div>
			<div class="equal-block img-block"> 
				<span class="element1 d-none d-md-block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Elements1.svg" alt="elements" width="40" height="40">
				</span> 
				<span class="element2 d-none d-md-block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Elements2.svg" alt="elements" width="40" height="40">
				</span>
				<span class="element3 d-none d-md-block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Elements3.svg" alt="elements" width="72" height="72">
				</span>
				<?php echo picturetag('banner_tab_image_desktop', 'homepage_thumb', 'homepage_tab', 'homepage_mobile', '501', '504', 'ms-md-auto d-block') ?>
			</div>
			</div>
		</div>
			<?php endwhile; ?> 
			</div>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?> 
		</div>
	</section>
<?php endif; endwhile; endif; ?>
<!-- banner section end -->
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
<!-- services blocks start -->
<?php if (have_rows( 'four_column_grid_content')): while (have_rows( 'four_column_grid_content')): the_row(); if (get_row_layout()=='four_column_grid_content' ): ?>
	<section id="services-blocks" class="services-blocks pt-0">
		<div class="container">
				<div class="four-column-block icon-blocks aos-init" data-aos="fade-up" data-aos-duration="1000">
					<?php if( have_rows( 'four_column_grid_group') ): ?>
					<?php while( have_rows( 'four_column_grid_group') ): the_row(); ?>
					<?php if (have_rows( 'four_column_grid')): ?>
					<?php while (have_rows( 'four_column_grid')): the_row(); ?>
					<div class="equal-block text-center"> 
						<?php echo imagetag('four_column_grid_icon', 'service_icon', '101', '100', 'lazyload') ?>
						<h4><?php $field('four_column_grid_header'); ?></h4>
						<p><?php $field( 'four_column_grid_description'); ?></p>
					</div>
					<?php endwhile; endif;?>
					<?php endwhile; endif;?>
				</div>
		</div>
	</section>
<?php endif; endwhile; endif;?> 
<!-- services blocks end -->
<!-- pricing start -->
<?php if (have_rows( 'plan_card_content')): while (have_rows( 'plan_card_content')): the_row(); if (get_row_layout()=='plan_card_content' ): ?>
	<section id="pricing" class="pricing  aos-init" data-aos="fade-up" data-aos-duration="1000">
		<div class="container small">
			<?php if (have_rows( 'plan_card_group')): ?>
			<?php while (have_rows( 'plan_card_group')): the_row(); ?>
				<h2 class="header px-sm-5 w-75 mx-auto text-center"><?php $field('plan_card_header'); ?></h2>
				<p class="text-center pricing-des">
				<?php $field( 'plan_card_description'); ?>
				</p>
				<div class="toggle d-flex align-items-center justify-content-center"> <span><?php $field('plan_card_monthly'); ?></span>
					<input type="checkbox" id="switch" />
					<label for="switch"></label> 
					<span>
						<?php $field('plan_card_yearly'); ?>  
						<span class="label discount">
						<?php $field('plan_card_label'); ?>
						</span> 
					</span>
				</div>
				<?php if (have_rows( 'plan_card_tab')): ?>
					<ul class="nav nav-pills justify-content-evenly mx-auto" id="pills-subscription" role="tablist">
						<?php $i=0 ;?>
						<?php while (have_rows( 'plan_card_tab')): the_row(); ?>
						<?php $i++; ?>
						<li class="nav-item text-center">
							<a class="nav-link <?php if($i == 1){echo 'active';} ?>" id="nav_link_id_<?php echo $i; ?>" data-toggle="pill" href="#tab_content_id_<?php echo $i; ?>" role="tab" aria-controls="tab_content_id_<?php echo $i; ?>" aria-selected="true">
							<?php $field( 'plan_card_tab_header'); ?>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?> 
				<?php if (have_rows( 'plan_card_tab')): ?>
				<div class="tab-content" id="pills-monthlyContent">
					<?php $i=0 ; ?>
					<?php while (have_rows( 'plan_card_tab')): the_row(); ?>
					<?php $i++; ?>
					<div class="tab-pane fade <?php if($i == 1){echo 'show active';} ?>" id="tab_content_id_<?php echo $i; ?>" role="tabpanel" aria-labelledby="nav_link_id_<?php echo $i; ?>">
						<?php if (have_rows( 'plan_card_boxes')): ?>
							<div class="plan-card-container">
								<?php while (have_rows( 'plan_card_boxes')): the_row(); ?>
								<div class="plan-card">
									<h4><?php $field('plan_card_boxes_header'); ?></h4>
									<p>
									<?php $field( 'plan_card_boxes_description'); ?>
									</p>
									<h3><?php $field('plan_card_boxes_price'); ?> <span><?php $field('plan_card_boxes_interval'); ?></span></h3>
									<?php
										$link = get_sub_field('plan_card_button');
									?>
									<a class="btn outline-btn large" href="<?php echo $link['url'] ?>">
										<?php echo $link['title']; ?>
									</a>
									<ul>
										<li class="sub-head mt-0">
											<?php $field( 'ssd_label'); ?>
										</li>
										<li>
											<?php $field( 'bandwidth_label'); ?>
										</li>
										<li>
											<?php $field( 'email_label'); ?>
										</li>
										<li class="sub-head">
											<?php $field( 'database_label'); ?>
										</li>
										<li>
											<?php $field( 'subdomains_label'); ?>
										</li>
										<li>
											<?php $field( 'domain_label'); ?>
										</li>
										<li>
											<?php $field( 'websites_label'); ?>
										</li>
										<li>
											<?php $field( 'ssl_label'); ?>
										</li>
										<li class="mb-0">
											<?php $field( 'softaculous_label'); ?>
										</li>
									</ul>
								</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?> 
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?> 
			<?php endwhile; ?>
			<?php endif; ?>
	 	</div>
	</section>
<?php endif;  endwhile; endif; ?>
<!-- pricing end -->
<!-- real stories start -->
<?php if (have_rows( 'grid_layout_content')): while (have_rows( 'grid_layout_content')): the_row(); if (get_row_layout()=='grid_layout_content' ): ?>
	<section class="real-stories aos-init" id="real-stories" data-aos="fade-up" data-aos-duration="1000">
	<div class="container grid-container ">
		<div class="grid-wrap">
		<div class="grid-item pb-sm-4">
			<?php if( have_rows( 'grid_layout_group') ): ?>
			<?php while( have_rows( 'grid_layout_group') ): the_row(); ?>
			<h2><span class="quotes-bg"></span> <?php $field('grid_layout_header'); ?></h2>
			<p>
			<?php $field( 'grid_layout_description'); ?>
			</p>
		</div>
		<?php if (have_rows( 'grid_layout_grid')): ?>
			<?php 
				$card_class = array('large', 'medium', 'small');
				$i=-1; ?>
		<?php while (have_rows( 'grid_layout_grid')): the_row(); ?>
		<?php $i++; ?>
		<div class="grid-item aos-init" data-aos="fade-up" data-aos-duration="1000">
			<div class="card <?php echo  $card_class[$i]?>">
				<?php echo imagetag('grid_layout_card_image', 'website_logo', '79', '50', 'mb-1 lazyload') ?>
				<div class="d-flex"> <span class="icons icon-quotes-icon quotes-icon"></span>
					<div class="content">
					<p>
						<?php $field( 'grid_layout_card_description'); ?>
					</p>
					<h5><?php $field('grid_layout_card_author'); ?></h5>
					<h6><?php $field('grid_layout_card_designation'); ?></h6> 
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; endif;?>
		<?php endwhile; endif;?>
		</div>
	</div>
	</section>
<?php endif; endwhile; endif;?> 
<!-- real stories end -->
<!-- serve wesites start -->
<?php if (have_rows( 'two_column_grid_content_2')): while (have_rows( 'two_column_grid_content_2')): the_row(); if (get_row_layout()=='two_column_grid_content_2' ): ?>
	<section id="serve-website" class="serve-website"  data-aos="fade-up" data-aos-duration="1000">
		<div class="container">
			<div class="two-column-block  aos-init" data-aos="fade-up" data-aos-duration="1000">
				<?php if( have_rows( 'two_column_grid_group') ): ?>
				<?php while( have_rows( 'two_column_grid_group') ): the_row(); ?>
				<div class="equal-block pe-xl-5 pe-sm-2">
					<h2><?php $field('two_column_grid_header'); ?></h2>
					<p class="pe-xl-5  me-xl-5">
					<?php $field( 'two_column_grid_description'); ?>
					</p>
				</div>
				<div class="equal-block ps-xl-5 mt-xl-1 ps-sm-3 aos-init" data-aos="fade-up" data-aos-duration="1000">
					<?php if (have_rows( 'brand_container')): ?>
						<ul class="brand-container brand-container mt-xl-1">
							<?php while (have_rows( 'brand_container')): the_row();?>
							<li> 
								<?php echo imagetag('brand_image', 'website_brand', '120', '70', 'lazyload') ?>
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
<!-- serve website end -->
<!-- contact us start -->
<?php if (have_rows( 'contact_us_content')): while (have_rows( 'contact_us_content')): the_row(); if (get_row_layout()=='contact_us_content' ): ?>
	<section class="contact-us aos-init" id="contact-us" data-aos="fade-up" data-aos-duration="1000">
		<div class="container"> 
			<span class="element1 d-none d-md-block">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Elements1.svg" alt="elements" width="40" height="40">
			</span> 
			<span class="element2 d-none d-md-block">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Elements2.svg" alt="elements" width="40" height="40">
			</span> 
			<span class="element3 d-none d-md-block">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Elements3.svg" alt="elements" width="72" height="72">
			</span>
			<?php if( have_rows( 'contact_us_group') ): ?>
				<div class="content-wrap text-center">
					<?php while( have_rows( 'contact_us_group') ): the_row(); ?>
						<h2 class="header w-75 mx-auto"> <?php $field('contact_us_header'); ?></h2>
						<?php
							$link = get_sub_field('contact_us_button');
						?>
						<a class="btn primary-btn" href="<?php echo $link['url'] ?>"> 
							<span class="icons icon-whatsapp-icon"></span>
							<?php echo $link['title']; ?> 
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif?>
		</div>
	</section>
<?php endif; endwhile; endif;?> 
<!-- contact us end -->

<?php get_footer(); ?>