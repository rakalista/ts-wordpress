<?php get_header()?>
	<!--Area de Destaque -->
	<aside>
  		<div class="destaque-post">
			<div class="container-fluid">
				<div class="row">
					<center><img src="http://vignette2.wikia.nocookie.net/uncyclopedia/images/5/5e/1-health_ad_728x90.jpg/revision/latest?cb=20080405022941" width="720" height="90"></center>
				</div>
			</div>
		</div>
  	</aside>
  	<!--Fim de Destaques -->


  	<div class="container-fluid">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="col s12 m6 l9" style="padding:0;">
						<h2 style="text-transform: uppercase; color: rgb(126, 126, 126); margin:0; font-size: 18px;"><i class="tiny material-icons ">web</i> Resultados Encontrados</h2>
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
						<div class="col s12 m6 l6">
							<div class="card medium">
					            <div class="card-image" style="max-height: 55%;">
					              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php miniatura(); ?>" class="responsive-img"></a>
					            </div>
					            <div class="card-content" style="max-height: 50%;">
					            	<span class="card-title" style="font-weight:bold;"><a href="<?php the_permalink(); ?>" class="title-post-index" title="<?php the_title(); ?>"><?php short_title('','...',true, '55');  ?></a></span>
					              	<p><?php echo excerpt('15'); ?> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Leia o Artigo</a></p>
					            
							        <div class="entry-index">
								        <a href="<?php the_permalink(); ?>/#comentarios" class="links-entry right" title="Comentarios"><?php comments_number( '0', '1', '%' ); ?> <i class="tiny material-icons ">comment</i></a>

								        <?php 
								        	$categories = get_the_category();
 
											if ( ! empty( $categories ) ) {
												$nomeCategoria = esc_html( $categories[0]->name );
												$linkCategoria = esc_url( get_category_link( $categories[0]->term_id ) );   
											}
								         ?>
								        <a href="<?php echo $linkCategoria ?>" class="links-entry left" title="<?php echo $nomeCategoria ?>"><?php echo $nomeCategoria ?> <i class="tiny material-icons ">bookmark</i></a>
							        </div>
							    </div>
				          	</div>
				        </div>
				       <?php endwhile; ?>

				       <div class="pagination center-align">
						<?php
							wp_corenavi();
						?>
						</div>
 
						<?php else : ?>
					     <h4><?php _e( 'Não encontramos o que você pesquisou...' ) ?></h4>
					     <p><?php _e( 'Mas não desanime, talvez você possa gostar de...' ); ?></p>
						<div id="relacionados">
									<div class="row">
										<?php echo recentPosts(); ?>
									</div>
						</div>
						<?php endif; ?>  

				    </div>
				    <div class="col s12 m6 l3">
				    	<?php get_sidebar()?>
				    </div>
				</div>
			</div>
		</div>
	</div>



<?php get_footer()?>

