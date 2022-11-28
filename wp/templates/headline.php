<!-- start section headline -->
<section class="headline">
	<div class="container headline__container">

		<div class="headline__img"><img src="<?php the_field('headline_img'); ?>" alt="Alt img"></div>
		<div class="headline__content">
			<h5 class="headline__suptitle title_h5"><?php the_field('headline_suptitle'); ?></h5>
			<h3 class="headline__title title_h3"><?php the_field('headline_title'); ?></h3>
			<div class="headline__text text"><?php the_field('headline_text'); ?></div>
			<a href="<?php the_field('headline_btn_link'); ?>" class="headline__btn btn"><?php the_field('headline_btn_text'); ?></a>
		</div>

	</div>
</section>
<!-- end section headline -->