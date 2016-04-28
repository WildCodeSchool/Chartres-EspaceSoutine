<?php get_header(); ?>
<!--Présentation Espace Soutine-->
		<div id="gpresentation" class="col-xs-12">
			<div class="row">
				<div class="description col-md-8 col-md-offset-2 col-xs-12 ">
					<?php
	                    $args = array(
	                        'post_type' => 'post',
	                        'posts_per_page' => 1,
	                        'category_name' => 'presentation'
	                    );
	                    $my_query = new WP_Query($args);
	                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
					?>
					<h2 style="color:#335481;"><?php the_title(); ?></h2>
        			<?php the_content(); ?>
	                <?php
	                    endwhile;
	                    endif;
	                    wp_reset_postdata();
	                ?>
					<div id="billet">
					 	<?php echo "<h2>$title</h2><p>$contenu</p><strong>$date</strong>"; ?>
		 			</div>
				</div>	
			</div>
			<div class="row header11">
				<div class="col-xs-6 col-md-2 col-md-offset-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/business_b.png" alt="logo Repas d'affaire">
					<p>Repas d'affaires</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/coloc_b.png" alt="Colloque">
					<p>Colloques</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/people_b.png" alt="Seminaire">
					<p>Séminaires</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/cocktail_b.png" alt="Cocktail">
					<p>Cocktails</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-2 col-md-offset-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/music_b.png" alt="Concert">
					<p>Concerts</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/rings_b.png" alt="Mariage">
					<p>Mariages</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/reveillon_b.png" alt="Réveillon">
					<p>Réveillons</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/theatre_b.png" alt="Spectacle">
					<p>Spectacles</p>
				</div>
			</div>
		</div>
<!--Nos prestations-->
		<div class="col-md-12">
			<div class="row">
				<div id="gprestation" class="col-xs-12 col-md-12">
					<div class="row marge1">
						<div class="col-xs-12 col-md-6 img_prestation marge-presta1">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Grande salle configuration tribune</h3>
								<p class="textimg5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 302 personnes</p>
								<img class="prestation imgrefund" src="<?php echo get_template_directory_uri(); ?>/img/02.jpg" alt="Grande_salle">
								<div class="overflow_text">
									<h3 class="textimg4">Grande salle configuration tribune</h3>
									<p class="nbr"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 302 personnes</p>
									<div class="divbli">
										<p class="bli">
											<?php
							                    $args = array(
							                        'post_type' => 'post',
							                        'posts_per_page' => 1,
							                        'category_name' => 'configuration_tribune'
							                    );
							                    $my_query = new WP_Query($args);
							                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
											?>
	                            			<?php the_content(); ?>
							                <?php
							                    endwhile;
							                    endif;
							                    wp_reset_postdata();
							                ?>
										</p>
									</div>					
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 img_prestation marge-presta2">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Grande salle configuration repas</h3>
								<p class="textimg5"><img src="<?php echo get_template_directory_uri(); ?>	/img/ico/cap.png" alt="capacité"> 250 personnes</p>
								<img class="prestation imgrefund" src="<?php echo get_template_directory_uri(); ?>/img/01.jpg" alt="Grande_salle">
								<div class="overflow_text">
									<h3 class="textimg4">Grande salle configuration repas</h3>
									<p class="nbr"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 250 personnes</p>
									<div class="divbli">
										<p class="bli">
											<?php
							                    $args = array(
							                        'post_type' => 'post',
							                        'posts_per_page' => 1,
							                        'category_name' => 'configuration repas'
							                    );
							                    $my_query = new WP_Query($args);
							                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
											?>
	                            			<?php the_content(); ?>
							                <?php
							                    endwhile;
							                    endif;
							                    wp_reset_postdata();
							                ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row marge2">
						<div class="col-xs-12 col-md-6 img_prestation marge-presta3">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Salle de réunions</h3>
								<p class="textimg5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 40 personnes</p>
								<img class="prestation imgrefund" src="<?php echo get_template_directory_uri(); ?>/img/06.jpg" alt="Salle_de_reunion">
								<div class="overflow_text">
									<h3 class="textimg4">Salle de réunions</h3>
									<p class="nbr"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 40 personnes</p>
									<div class="divbli">
										<p class="bli">
											<?php
							                    $args = array(
							                        'post_type' => 'post',
							                        'posts_per_page' => 1,
							                        'category_name' => 'salle_de_reunions'
							                    );
							                    $my_query = new WP_Query($args);
							                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
											?>
	                            			<?php the_content(); ?>
							                <?php
							                    endwhile;
							                    endif;
							                    wp_reset_postdata();
							                ?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 img_prestation marge-presta4">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Hall d'accueil</h3>
								<p class="textimg5"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 85 personnes</p>
								<img class="prestation imgrefund" src="<?php echo get_template_directory_uri(); ?>/img/03.jpg" alt="Hall_d_accueil">
								<div class="overflow_text">
									<h3 class="textimg4">Hall d'accueil</h3>
									<p class="nbr"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/cap.png" alt="capacité"> 85 personnes</p>	
									<div class="divbli">
										<p class="bli">
											<?php
							                    $args = array(
							                        'post_type' => 'post',
							                        'posts_per_page' => 1,
							                        'category_name' => 'hall_d_accueil'
							                    );
							                    $my_query = new WP_Query($args);
							                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
											?>
	                            			<?php the_content(); ?>
							                <?php
							                    endwhile;
							                    endif;
							                    wp_reset_postdata();
							                ?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 blanc invite_telecharger">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-4 col-md-6">
					<p class="float-left">Téléchargez nos prestations et tarifs</p>
				<a class="btn-header btn-default padding-left-20px" href="<?php echo get_home_url(); ?>/index.php/download/">
	        		<span class="dl glyphicon glyphicon-download-alt telecharger "><span>
	        	</a>
	        </div>
		</div>
<!--Galerie-->
		<div id="galerie" class="galerie col-md-12">
			<h2>Galerie</h2>
			<div class="row">
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 1,
									'category_name' => 'carousel-active',
								);
								$my_query = new WP_Query($args);
								if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
							?> 
							<div class="item active main-carousel">
								<?php the_content(); ?>
							</div>
							<?php
								endwhile;
								endif;
								wp_reset_postdata();
							?>
							<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 9,
									'category_name' => 'carousel',
								);
								$my_query = new WP_Query($args);
								if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
							?> 
							<div class="item main-carousel">
								<?php the_content(); ?>
							</div>
							<?php
								endwhile;
								endif;
								wp_reset_postdata();
							?>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div id="gnous_contacter"></div>
		</div>
<!--Nous contacter-->
		<div class="col-xs-12 col-md-12 blue-area">
			<div class="gnous_contacter col-xs-12 col-md-12">
				<div class="row">
				<h2>Nous contacter</h2>
					<div class="col-xs-12 col-md-6 info">
						<div class="row">
							<div class="col-xs-12 col-md-11 col-md-offset-1">
								<div class="adresse">
									<div class="row">
										<div class="col-xs-6 col-md-5 white">
											<p><span class="glyphicon glyphicon-map-marker"></span><span> </span>41 rue de la Chacatière</p>
											<p>28300 Lèves</p>
											<p><span class="glyphicon glyphicon-earphone"> </span> 02.37.180.180</p>
											<p><img class="car" src="<?php echo get_template_directory_uri(); ?>/img/ico/car.png" alt="capacité">Parking gratuit</p>
										</div>
										<div class="col-xs-6 col-md-5 white">
											<p><img class="bus" src="<?php echo get_template_directory_uri(); ?>/img/ico/transport.png" alt="capacité"><span>Bus ligne 8</span></p>
											<div class="row">
												<div class="col-xs-6">
													<p class="horaires"><span class="glyphicon glyphicon-time"></span><span> Horaires :</span></p>
												</div>
												<div class="col-xs-6">
													<a href="http://www.filibus.fr/presentation/?rub_code=89" title="filibus"><img class="filibus" src="<?php echo get_template_directory_uri(); ?>/img/ico/filibus.png" title="filibus"></a>
												</div>
											</div>
											<div class="col-xs-12 no-padding-left">
												<p>Gare de Chartres à 5mn</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-11 col-md-offset-1">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10581.353360933439!2d1.4737741!3d48.4692235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab3428056b369dae!2sEspace+Soutine!5e0!3m2!1sfr!2sfr!4v1459979008375" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 formulaire">
	                    <div class="row">
	                            <div id ="contact" class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 center form_padding">
	                            <form method="post">
	                            	<?php echo do_shortcode( '[contact-form-7 id="169" title="Nous contacter"]' ); ?>    
	                            </form>
	                          </div>
	                    </div>
	                </div>
				</div>
			</div>
		</div>
<!--Evenements-->
		<div id="gevenement" class="col-xs-12 col-md-12 event-area">
			<h2>Événements à venir</h2>
			<?php    $thumbs = array(
				'category_name' => 'Evenements',
                'posts_per_page' => 3,
                'meta_query' => array(array('key' => '_thumbnail_id'))
					 );
						$newsWithPic = new WP_Query($thumbs);
							if($newsWithPic->have_posts()) :
								while ($newsWithPic->have_posts() ) : $newsWithPic->the_post();
		  						?>
				  					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 containimg">
					  					<div class="card">
						  					<div class="img-responsive">
							  					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'taille-perso' ); } 
							  					?>
									        </div>
									        <div class="texte_event">
									            <p class="postmetadata">
									            </p>
									            <p><?php the_content(); ?></p>
									            <a class="boutonbas" href="http://www.leves.fr/slider-homepage" title="En savoir plus">
												En savoir plus
												</a>
											</div>
										</div>
									</div>
								<?php
							endwhile;
						endif;
				wp_reset_postdata();
			?>	
		</div>
<?php get_footer(); ?>