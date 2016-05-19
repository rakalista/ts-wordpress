<?php get_header()?>
	<!--Area de Destaque de Categoria -->
	<section>
  		<div class="destaque">
			<div class="container-fluid">
				<div class="row">
					<div class="col s12">
						<div class="col s12 m6 l3">
							<div class="card small small-destaques">
							    <div class="card-image" style="max-height: 100%;">
							        <a href="http://www.tvseriados.net/categoria/noticias/" title="Notícias"><img src="<?php bloginfo('template_directory'); ?>/images/destaques/noticias.jpg"></a>
							        <span class="card-title card-title-transparent" style="padding: 5px;">Notícias</span>
							    </div>
							</div>
						</div>

						<div class="col s12 m6 l3">
							<div class="card small small-destaques">
							    <div class="card-image" style="max-height: 100%;">
							        <a href="http://www.tvseriados.net/categoria/dicas/" title="Dicas"><img src="<?php bloginfo('template_directory'); ?>/images/destaques/dicas.jpg"></a>
							    	<span class="card-title card-title-transparent" style="padding: 5px;">Dicas</span>
							    </div>
							</div>
						</div>

						<div class="col s12 m6 l3">
							<div class="card small small-destaques">
							    <div class="card-image" style="max-height: 100%;">
							        <a href="http://www.tvseriados.net/categoria/novidades-netflix/" title="Novidades Netflix"><img src="<?php bloginfo('template_directory'); ?>/images/destaques/netflix.jpg"></a>
							    	<span class="card-title card-title-transparent" style="padding: 5px;">Novidades Netflix</span>
							    </div>
							</div>
						</div>

						<div class="col s12 m6 l3">
							<div class="card small small-destaques">
							    <div class="card-image" style="max-height: 100%;">
							        <a href="http://www.tvseriados.net/categoria/trailers/" title="Trailers"><img src="<?php bloginfo('template_directory'); ?>/images/destaques/trailers.jpg"></a>
							    	<span class="card-title card-title-transparent" style="padding: 5px;">Trailers</span>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</section>
  	<!--Fim de Destaques -->


  	<div class="container-fluid">
		<div class="row">
			<div class="col s12">
				<div class="row">
					<div class="col s12 m6 l9" style="padding:0;">
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

