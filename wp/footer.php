</main>

		<footer class="footer">
			<div class="container">

				<div class="footer__top">

					<div class="footer__main">
						<div class="footer__logo">
							<a href="/" class="footer__logo-wrapper">
								<div class="footer__logo-img"><img src="<?php the_field('logo', 7); ?>" alt="Logo company"></div>
								<div class="footer__logo-content">
									<div class="footer__logo-title"><?php the_field('logo_title', 7); ?></div>
									<div class="footer__logo-subtitle"><?php the_field('logo_subtitle', 7); ?></div>
								</div>
							</a>
						</div>
						<div class="footer__desc text"><?php the_field('footer_desc', 7); ?></div>
					</div>
					<div class="footer__counter"><?php echo do_shortcode('[wps_visitor_counter]'); ?></div>

				</div>

				<div class="footer__bottom">
					<div class="footer__links text"><?php the_field('footer_links', 7); ?></div>
					<div class="footer__copyright"><?php the_field('footer_copyright', 7); ?></div>
				</div>

			</div>
		</footer>

	</div>
	
	<div class="popup__wrapper" id="popup-video">
		<div class="overlay"></div>
		<div class="popup popup__video">
			<iframe src="https://www.youtube.com/embed/jGmiYzCPnSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	<div class="popup__wrapper" id="popup-review">
		<div class="overlay"></div>
		<div class="popup">
			<button class="popup__close menu-btn active"><span></span></button>
			<?php echo do_shortcode('[testimonial_view id="1"]'); ?>
		</div>
	</div>
	<div class="popup__wrapper" id="popup-thanks">
		<div class="overlay"></div>
		<div class="popup">
			<button class="popup__close menu-btn active"><span></span></button>
			<h5 class="popup__title title_h5"><?php the_field('popup_thanks_title', 7); ?></h5>
		</div>
	</div>

	<?php wp_footer(); ?>
	<script>
		document.addEventListener('wpcf7submit', function( event ) {
			console.log(1)
			$('.popup__wrapper').addClass('hide');
			setTimeout(function () {
				$('.popup__wrapper').removeClass('active hide').hide();
				$('body').removeClass('overflow-hidden');
				$('#popup-thanks').show().addClass('active');
				$('body').addClass('overflow-hidden');
			}, 300)
		}, false );
	</script>

</body>
</html>