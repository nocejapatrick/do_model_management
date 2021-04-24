<?php if(is_front_page()){?>
<div id="footer-instagram" class="widget-area" role="complementary">
	<div class="instagram-container">
		<div class="wrapper">
			<div class="footer-instagram">
				<section id="catch-instagram-feed-gallery-widget-7" class="widget catch-instagram-feed-gallery-widget">
                <?= do_shortcode('[catch-instagram-feed-gallery-widget title="Instagram Posts" number="6" username="nocejapatrick"]')?>
                </section>			
            </div>
		</div>
	</div>
</div>
<?php } ?>