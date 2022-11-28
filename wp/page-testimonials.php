<?php /* Template Name: Testimonials */ ?>
<?php get_header(); ?>

<!-- start section reviews -->
<section class="reviews">
	<div class="container">

		<div class="reviews__top">
			<h1 class="reviews__title title_h1"><?php the_title(); ?></h1>
			<button class="reviews__btn btn btn_border popup-link" data-popup="popup-review">Add review</button>
		</div>

		<div class="reviews__list">
			<?php
			if (get_query_var('paged')) {
				$paged = get_query_var('paged');
			} elseif (get_query_var('page')) {
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}
			$args = array(
				'post_type' => 'wpm-testimonial',
				'post_status' => 'publish',
				'paged' => $paged,
				'order' => 'DESC',
				'posts_per_page' => '5',
			);
			global $wp_query;
			$wp_query = new WP_Query($args);
			$reviews = new WP_Query($args);
			?>
			<?php if ($reviews->have_posts()) :
				while ($reviews->have_posts()) : $reviews->the_post(); ?>
					<?php
					$meta = get_post_meta(get_the_ID());
					$name = $meta['client_name'][0];
					?>
					<div class="reviews__item">
						<div class="reviews__item-top">
							<h4 class="reviews__item-name title_h4"><?php echo $name; ?></h4>
							<div class="reviews__item-date"><?php echo get_the_date('d.m.Y') ?></div>
						</div>
						<div class="reviews__item-text text"><?php the_content(); ?></div>
					</div>
				<?php endwhile; ?>
				<div class="reviews__nav">
					<?php the_posts_pagination([
						'prev_text'    => __('<svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg"><path d="M5.17199 6.0932L0.221985 10.8326L1.63599 12.1864L8 6.0932L1.63599 0L0.221985 1.35383L5.17199 6.0932Z"/></svg>'),
						'next_text'    => __('<svg width="8" height="13" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg"><path d="M5.17199 6.0932L0.221985 10.8326L1.63599 12.1864L8 6.0932L1.63599 0L0.221985 1.35383L5.17199 6.0932Z"/></svg>'),
					]); ?>
				</div>
			<?php else : ?>
				Sorry, no posts matched your criteria.
			<?php endif;
			wp_reset_query(); ?>
		</div>

	</div>
</section>
<!-- end section reviews -->

<?php get_footer(); ?>