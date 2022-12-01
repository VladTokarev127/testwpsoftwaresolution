<!-- start section contacts -->
<section class="contacts">
	<div class="contacts__bg"><img src="<?php the_field('contacts_background'); ?>" alt=""></div>
	<div class="container">

		<div class="contacts__content text"><?php the_field('contacts_text'); ?></div>
		<div class="contacts__wrapper">
			<div class="contacts__map" id="map"><?php the_field('contacts_map'); ?></div>
			<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form" html_class="contacts__form form"]') ?>
		</div>

	</div>
</section>
<!-- end section contacts -->