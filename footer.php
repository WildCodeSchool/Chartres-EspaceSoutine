		<div class="col-xs-12 soutine-footer">
			<div class="row marg-footer">
				<div class="col-xs-12 col-md-4 footer-part-3">
					<div class="row">
						<div>
							<ul>
								<li><h3>Plan du site</h3></li>
								<?php wp_nav_menu( array(
									'theme_location' => 'footer-menu',
									'container' => false,
									'menu_class' => 'footer-menu' ) ); 
									?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 	col-md-4 footer-part-1">
					<p class="grey">ESPACE <span>SOUTINE</span><br /></p>
					<p class="sstitre">41 rue de la Chacatière <br> 28300 Lèves<br>02.37.180.180</p>
				</div>
				<div class="col-xs-12 col-md-4 footer-part-2 social">
					<h3 style="margin-top:0px;">Un service de la ville de Lèves</h3>
					<div class="logo-mairie">
						<a href="http://www.leves.fr">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/leves.png">
						</a>
					</div>
					<div class="col-xs-12 logo-social">
						<div class="col-xs-2" style="padding-left:0px;">
							<a href="https://www.facebook.com/villedeleves">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/facebook.png">
							</a>
						</div>
						<div class="col-xs-2" style="padding-left:0px;">
							<a href="https://twitter.com/villedeleves">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/twitter.png">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
		<script type ="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/anime.js"></script>
	</body>
</html>