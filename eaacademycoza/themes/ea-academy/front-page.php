<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EA_Academy
 */

get_header();
?>

<div class="landing-banner" style="background-image: url('<?php echo get_field('landing_background_image'); ?>'); ?>">
	<div class="max-width flex flex-wrap space-between">
		<div class="landing-content col-50">
			<h1><?php echo get_field('landing_heading'); ?></h1>
			<?php 
			echo get_field('landing_content');
			if (get_field('landing_buttons')) { ?>
                <div class="buttons">
                    <?php
                    $i = 1;
                    while (have_rows('landing_buttons')) {
                        the_row();
                        $class = ($i === 1) ? 'bright-blue' : 'dark-blue';
                        $button = get_sub_field('button');
                        if (isset($button['url'], $button['title'])) { ?>
                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
                                <?php echo esc_html($button['title']); ?>
                            </a>
                        <?php }
                        $i++;
                    } ?>
                </div>
            <?php } ?>
		</div>
		<div class="application-form col-50">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="true" ajax="true"]'); ?>
		</div>
	</div>
</div>

<div id="course">
	<div class="max-width flex flex-wrap space-between">
		<div class="course-tabs">
			<div class="course-tab-titles flex">
				<a class="course-tab" href="#overview" data-tab-index="0">Overview</a>
				<a class="course-tab" href="#about-course" data-tab-index="1">About The Course</a>
				<a class="course-tab" href="#requirements" data-tab-index="2">Requirements</a>
			</div>
			<div class="course-tab-contents">
			    <div id="overview" class="course-tab-content" data-tab-index="0">
			    	<div class="flex flex-wrap space-between">
			    		<div class="col-50">
					    	<?php 
					    	echo get_field('course_heading');
					    	echo get_field('course_overview_content');
					    	?>
					    </div>
					    <div class="col-50">
					    	<span>Course</span>
					    	<h1><?php echo get_field('course_title'); ?></h1>
				    		<?php
				    		if (get_field('course_buttons')) { ?>
				                <div class="buttons">
				                    <?php
				                    $i = 1;
				                    while (have_rows('course_buttons')) {
				                        the_row();
				                        $class = ($i === 1) ? 'bright-blue' : 'dark-blue';
				                        $button = get_sub_field('button');
				                        if (isset($button['url'], $button['title'])) { ?>
				                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
				                                <?php echo esc_html($button['title']); ?>
				                            </a>
				                        <?php }
				                        $i++;
				                    } ?>
				                </div>
				            <?php } ?>
					    </div>
				    </div>
			    </div>
			    <div id="about-course" class="course-tab-content" data-tab-index="0">
			    	<div class="flex flex-wrap space-between">
			    		<div class="col-50">
					    	<?php 
					    	echo get_field('course_heading');
					    	echo get_field('course_about_content');
				    		if (get_field('course_buttons')) { ?>
				                <div class="buttons">
				                    <?php
				                    $i = 1;
				                    while (have_rows('course_buttons')) {
				                        the_row();
				                        $class = ($i === 1) ? 'bright-blue' : 'dark-blue';
				                        $button = get_sub_field('button');
				                        if (isset($button['url'], $button['title'])) { ?>
				                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
				                                <?php echo esc_html($button['title']); ?>
				                            </a>
				                        <?php }
				                        $i++;
				                    } ?>
				                </div>
				            <?php } ?>
					    </div>
					    <div class="col-50">
					    	<span>Course</span>
					    	<h1><?php echo get_field('course_title'); ?> Qualification</h1>
					    </div>
				    </div>
			    </div>
			    <div id="requirements" class="course-tab-content" data-tab-index="0">
			    	<div class="flex flex-wrap space-between">
			    		<div class="col-50">
					    	<?php 
					    	echo get_field('course_heading');
					    	echo get_field('course_requirements_content');
				    		if (get_field('course_buttons')) { ?>
				                <div class="buttons">
				                    <?php
				                    $i = 1;
				                    while (have_rows('course_buttons')) {
				                        the_row();
				                        $class = ($i === 1) ? 'bright-blue' : 'dark-blue';
				                        $button = get_sub_field('button');
				                        if (isset($button['url'], $button['title'])) { ?>
				                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
				                                <?php echo esc_html($button['title']); ?>
				                            </a>
				                        <?php }
				                        $i++;
				                    } ?>
				                </div>
				            <?php } ?>
					    </div>
					    <div class="col-50">
					    	<span>Course</span>
					    	<h1><?php echo get_field('course_title'); ?> Qualification</h1>
					    </div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
</div>

<div class="programme-structure">
	<div class="max-width flex flex-wrap space-between">
		<div class="programme-content col-50">
			<h2><?php echo get_field('programme_structure_heading'); ?></h2>
			<?php
			if (get_field('programme_structure')) { ?>
				<div class="programme-list">
					<?php
					$i = 1;
					while (have_rows('programme_structure')) {
					    the_row(); ?>
					    <div class="list-item flex flex-wrap space-between align-center">
							<span>0<?php echo $i; ?></span>
							<p><?php echo get_sub_field('item'); ?></p>
						</div>
						<?php 
						$i++;
					} ?>
				</div>
			<?php } ?>
			<a class="eaa-button bright-blue" href="<?php echo get_field('programme_structure_button')['url']; ?>"><?php echo get_field('programme_structure_button')['title']; ?></a>
		</div>
		<div class="programme-accordion col-50">
			<?php
			if (get_field('programme_structure_accordion')) {
				while (have_rows('programme_structure_accordion')) {
				    the_row(); ?>
				    <div class="accordion-item">
						<div class="accordion-header flex flex-wrap space-between align-center">
							<h3><?php echo get_sub_field('title'); ?></h3>
						</div>
						<div class="accordion-content flex flex-wrap space-between">
							<?php echo get_sub_field('content'); ?>	
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</div>

<div class="graduate-capabilities">
	<div class="max-width flex flex-wrap space-between align-center">
		<div class="col-50">
			<h2><?php echo get_field('landing_heading'); ?></h2>
			<?php 
			if (get_field('landing_buttons')) { ?>
	            <div class="buttons">
	                <?php
	                $i = 1;
	                while (have_rows('landing_buttons')) {
	                    the_row();
	                    $class = ($i === 1) ? 'bright-blue' : 'white-o';
	                    $button = get_sub_field('button');
	                    if (isset($button['url'], $button['title'])) { ?>
	                        <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
	                            <?php echo esc_html($button['title']); ?>
	                        </a>
	                    <?php }
	                    $i++;
	                } ?>
	            </div>
	        <?php } ?>
	    </div>
	   	<div class="col-50">
	   		<?php
			if (get_field('graduate_capabilities')) { ?>
				<div class="capabilities-list">
					<?php
					$i = 1;
					while (have_rows('graduate_capabilities')) {
					    the_row(); ?>
					    <div class="list-item flex flex-wrap space-between align-center">
							<img src="/wp-content/uploads/2025/09/arrow.svg">
							<?php echo get_sub_field('capability'); ?>
						</div>
						<?php 
						$i++;
					} ?>
				</div>
			<?php } ?>
	   	</div>
	</div>
</div>

<div class="support-services">
    <div class="max-width">
        <div class="wrap">
            <h2><?php echo get_field('services_heading'); ?></h2>
            <?php 
            echo get_field('services_content');
            if (get_field('services_buttons')) { ?>
                <div class="buttons">
                    <?php
                    $i = 1;
                    while (have_rows('services_buttons')) {
                        the_row();
                        $class = ($i === 1) ? 'bright-blue' : 'dark-blue';
                        $button = get_sub_field('button');
                        if (isset($button['url'], $button['title'])) { ?>
                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
                                <?php echo esc_html($button['title']); ?>
                            </a>
                        <?php }
                        $i++;
                    } ?>
                </div>
            <?php } ?>
        </div>
        <div class="services-carousel">
	        <?php
	        if (get_field('services')) {
	            while (have_rows('services')) {
	                the_row(); ?>
	                <div class="service-item">
	                    <div class="slide-inner">
	                        <img src="<?php echo get_sub_field('image'); ?>">
	                        <div class="service-content">
	                            <h3 class="service-title"><?php echo get_sub_field('title'); ?></h3>
	                        </div>
	                    </div>
	                </div>
	            <?php } 
	        } ?>
        </div>
    </div>
</div>

<div id="why-choose-us">
	<div class="max-width">
		<h2><?php echo get_field('why_choose_us_heading'); ?></h2>
		<?php
		if (get_field('why_choose_us')) { ?>
			<div class="flex flex-wrap space-between">
				<?php
				$i = 1;
				while (have_rows('why_choose_us')) {
				    the_row(); ?>
				    <div class="item">
						<span>0<?php echo $i; ?></span>
						<?php echo get_sub_field('item'); ?>
					</div>
					<?php 
					$i++;
				} ?>
			</div>
		<?php } ?>
	</div>
</div>

<div class="banner" style="background-image: url('<?php echo get_field('banner_background_image'); ?>'); ?>">
	<div class="max-width">
		<div class="banner-content">
			<?php 
			echo get_field('banner_content');
			if (get_field('banner_buttons')) { ?>
                <div class="buttons">
                    <?php
                    $i = 1;
                    while (have_rows('banner_buttons')) {
                        the_row();
                        $class = ($i === 1) ? 'bright-blue' : 'white';
                        $button = get_sub_field('button');
                        if (isset($button['url'], $button['title'])) { ?>
                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
                                <?php echo esc_html($button['title']); ?>
                            </a>
                        <?php }
                        $i++;
                    } ?>
                </div>
            <?php } ?>
		</div>
	</div>
</div>

<div id="about">
	<div class="max-width flex flex-wrap space-between">
		<div class="about-content col-50">
			<h2><?php echo get_field('about_heading'); ?></h2>
			<?php
			echo get_field('about_content');
			if (get_field('about_buttons')) { ?>
                <div class="buttons">
                    <?php
                    $i = 1;
                    while (have_rows('about_buttons')) {
                        the_row();
                        $class = ($i === 1) ? 'bright-blue' : 'dark-blue';
                        $button = get_sub_field('button');
                        if (isset($button['url'], $button['title'])) { ?>
                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
                                <?php echo esc_html($button['title']); ?>
                            </a>
                        <?php }
                        $i++;
                    } ?>
                </div>
            <?php } ?>
		</div>
		<div class="about-accordion col-50">
			<?php
			if (get_field('about_accordion')) {
				while (have_rows('about_accordion')) {
				    the_row(); ?>
				    <div class="accordion-item">
						<div class="accordion-header flex flex-wrap space-between align-center">
							<h3><?php echo get_sub_field('title'); ?></h3>
						</div>
						<div class="accordion-content flex flex-wrap space-between">
							<?php echo get_sub_field('content'); ?>	
						</div>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</div>

<div class="leadership">
	<div class="max-width flex flex-wrap space-between">
		<div class="leadership-image">
			<img src="<?php echo get_field('leadership_image'); ?>">
			<span><?php echo get_field('leadership_name'); ?></span>
		</div>
		<div class="leadership-content">
			<h2><?php echo get_field('leadership_heading'); ?></h2>
			<div class="flex flex-wrap space-between">
				<div class="col-40">
					<?php echo get_field('leadership_content_col_1'); ?>
					<a class="eaa-button bright-blue" href="<?php echo get_field('leadship_button')['url']; ?>"><?php echo get_field('leadship_button')['title']; ?></a>
				</div>
				<div class="col-60">
					<?php echo get_field('leadership_content_col_2'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="campus-facilities">
	<div class="max-width flex flex-wrap space-between align-center">
		<div class="col-50">
			<h2><?php echo get_field('campus_facilities_heading'); ?></h2>
			<?php
			if (get_field('campus_facilities')) { ?>
				<div class="facilities-list">
					<?php
					$i = 1;
					while (have_rows('campus_facilities')) {
					    the_row(); ?>
					    <div class="list-item flex flex-wrap space-between align-center">
							<img src="/wp-content/uploads/2025/09/arrow.svg">
							<?php echo get_sub_field('campus_facility'); ?>
						</div>
						<?php 
						$i++;
					} ?>
				</div>
			<?php }
			if (get_field('campus_facilities_buttons')) { ?>
	            <div class="buttons">
	                <?php
	                $i = 1;
	                while (have_rows('campus_facilities_buttons')) {
	                    the_row();
	                    $class = ($i === 1) ? 'bright-blue' : 'white';
	                    $button = get_sub_field('button');
	                    if (isset($button['url'], $button['title'])) { ?>
	                        <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
	                            <?php echo esc_html($button['title']); ?>
	                        </a>
	                    <?php }
	                    $i++;
	                } ?>
	            </div>
	        <?php } ?>
	    </div>
	    <div class="col-50">
	    	<?php echo get_field('campus_facilities_content'); ?>
	    </div>
	</div>
</div>

<div class="gradient-banner">
	<div class="max-width">
		<div class="banner-content">
			<?php 
			echo get_field('banner_2_content');
			if (get_field('banner_2_buttons')) { ?>
                <div class="buttons">
                    <?php
                    $i = 1;
                    while (have_rows('banner_2_buttons')) {
                        the_row();
                        $class = ($i === 1) ? 'bright-blue' : 'white';
                        $button = get_sub_field('button');
                        if (isset($button['url'], $button['title'])) { ?>
                            <a class="eaa-button <?php echo esc_attr($class); ?>" href="<?php echo esc_url($button['url']); ?>">
                                <?php echo esc_html($button['title']); ?>
                            </a>
                        <?php }
                        $i++;
                    } ?>
                </div>
            <?php } ?>
		</div>
	</div>
</div>

<div id="faq">
	<div class="max-width grid space-between">
		<h2>FAQ</h2>
		<?php
		if (get_field('faq')) {
			while (have_rows('faq')) {
				the_row(); ?>
			    <div class="faq">
			    	<h3><?php echo get_sub_field('question'); ?></h3>
					<p><?php echo get_sub_field('answer'); ?></p>
				</div>
			<?php }
		} ?>
	</div>
</div>

<?php
get_footer();
