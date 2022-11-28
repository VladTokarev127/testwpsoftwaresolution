<?php get_header(); ?>

<!-- start section content -->
<section class="content">
	<div class="container">

		<div class="content__wrapper text">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>

	</div>
</section>
<!-- end section content -->

<?php get_footer(); ?>