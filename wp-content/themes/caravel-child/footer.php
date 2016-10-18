<div class="section-content section-footer bg-inline" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg-wave.png');">
	<div class="container container-custom">
		<div class="footer-logo text-center">
		<a href="<?php echo of_get_option('footer_logo', 'no entry');?>"><img src="<?php echo of_get_option('footer_logo', 'no entry');?>" alt=""></a>
		</div>
		<div class="footer-menu">
			<ul>
				<li>
					<a href="">Home</a>
				</li>
				<li>
					<a href="">About Us</a>
				</li>
				<li>
					<a href="">Services</a>
				</li>
				<li>
					<a href="">Crew Apllicants</a>
				</li>
				<li>
					<a href="">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="footer-bottom text-center">
		<p><?php echo of_get_option('copyright_text', 'no entry');?></p>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>