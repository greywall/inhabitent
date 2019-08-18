<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				

				<div class="footer-content container">

					<div class="info-hours">
						<div class="contact-info">

									<h3><span> </i> </span class="strong">Contact Info</h3>
									<p><span> <i class="fa fa-envelope"></i> </span>info@inhabitent.com</p>
									<p><i class="fa fa-phone-square"></i>
									<a>778-883-6064</a></p>
									
									<div> <!-- Start of Div social icons-->
										<span> <i class="fa fa-facebook-square"></i> </span>
										<span> <i class="fa fa-twitter-square"></i> </span>
										<span> <i class="fa fa-youtube-square"></i> </span>
									</div> <!-- End of Div social icons-->
									
							</div> <!-- End of contact-info -->

							<div class="business-hours">
								<h3><span class="strong">Business Hours<span></h3>
								<p><span class="timeperiod">Monday-Friday: </span>9am to 5pm</p>
								<p><span class="timeperiod">Saturday: </span>10am to 2pm</p>
								<p><span class="timeperiod">Sunday: </span>Closed</p>	
							</div> <!-- End of Div class Business Hours-->					

						</div>	<!-- End of Div class info-hours -->

					<div class="logo-block" >
						<div class="footer-logo">
							<a href=""<?php echo get_template_directory_uri();?> rel="home" >
							<img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-text.svg" alt="logo"/>
							</a>
						</div>
					</div> <!-- End of Div class footer-logo-->

				</div> <!-- End of Div class foot content-->
					
					
					<div class="copyright-info">
						<div class="container">
						<p>COPYRIGHT © 2019 INHABITENT</p>
						</div>
					</div> <!-- End of Div class copyright info-->
				
					
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
