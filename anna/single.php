<?php get_header()?>
  	<aside>
  		<div class="destaque-post">
			<div class="container-fluid">
				<div class="row">
					<center><img src="http://www.todesaida.com/wp-content/uploads/2014/05/728x90-example-banner.jpg" class="responsive-img" width="728" height="90"></center>
				</div>
			</div>
		</div>
  	</aside>
	<div class="container-fluid">
		<div class="row">
			<div class="col s12">	
			  	<?php if ( function_exists('yoast_breadcrumb') ) 
				{yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
				<div class="row">
					<div class="col s12 m12 l9" style="padding:0 0 25px 0;">
						<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
						<article class="post">
							<header>
								<h1 class="titulo-post"><?php the_title(); get_post_views(get_the_ID());?></h1>
								<h2 class="resumo-post"><?php the_excerpt(); ?></h2>
								<span class="entry-post">
									<span class="entry-author">Por <?php the_author(); ?></span>
									<span class="entry-author pull-right"><?php the_date(); ?></span>
								</span>
							</header>
							<div class="conteudo-post">
								<img src="<?php miniatura(); ?>" class="responsive-img" style="padding: 5px 0; width:100%;">
								<?php the_content();?>
							</div>

							<span class="entry-post-footer">
								<!-- TAGS DO POST -->
								<div class="col s12 m6 l6" style="padding: 10px 0;">
								<span class="entry-tags">
									<?php the_tags( '<span class="chip" style="margin: 2px 5px;">', '</span> <span class="chip" style="margin: 2px 5px;">', '</span>' ); ?>
								</span>
								</div>
								<!-- BOTOES SOCIAIS DO POST -->
								<div class="col s12 m6 l6" style="text-align: right; padding: 10px 0;">
								<span class="entry-social">
									<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title();?>" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons facebook"><i class="fa fa-facebook fa-2"></i></span></a>

									<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons googleplus"><i class="fa fa-google-plus fa-2"></i></span></a>

									<a href="http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php the_permalink(); ?>" onclick="window.open('http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php the_permalink(); ?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons twitter"><i class="fa fa-twitter fa-2"></i></span></a>

									<a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php miniatura(); ?>&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title();?>" onclick="window.open('http://pinterest.com/pin/create/bookmarklet/?media=<?php miniatura(); ?>&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title();?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons pinterest"><i class="fa fa-pinterest fa-2"></i></span></a>
								</span>
								</div>
							</span>
						</article>
						<?php endwhile; ?>

                		<?php endif; ?>
					</div>

					<div class="col s12 m12 l3">
						<?php get_template_part('sidebar_single')?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section>
		<div id="leiatambem">
			<div class="container-fluid">
				<div id="relacionados">
					<div id="container-rel">
						<h3 class="leia-tambem center">
							Leia Também
						</h3>
						<div class="container">
							<div class="row">
								<?php echo recentPosts(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<aside>
		<div class="container-fluid">
			<div class="row">
				<div class="col s12 m6 l9" id="comentarios">
					<?php comments_template(); ?>
				</div>
				<div class="col s12 m6 l3" id="lateral-comentarios">
					<div class="widget-container">
						<?php 	/* Widgetized sidebar, if you have the plugin installed. */
							if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(Anuncio_300x250) ) : ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</aside>

<?php get_footer()?>
