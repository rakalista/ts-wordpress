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
			  	<div id="breadcrumbs">
			  		<?php seobreadcrumbs();?>
			  	</div>
				<div class="row">
					<div class="col s12 m12 l9" style="padding:0 0 25px 0;">
						<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
						<article class="post">
							<header>
								<h1 class="titulo-post"><?php the_title(); get_post_views(get_the_ID());?></h1>
								<h2 class="resumo-post"><?php the_excerpt(); ?></h2>
							</header>
							<div class="conteudo-post">
								<img src="<?php miniatura(); ?>" class="responsive-img" style="padding: 5px 0;">
								<?php the_content();?>
							</div>							
						</article>
						<?php endwhile; ?>

                		<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer()?>