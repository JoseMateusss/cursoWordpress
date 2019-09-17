<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<section style="background-color: #e9ecef;">
		<div class="container max-width" style="max-width: 900px;">
			<div aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Notícias</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
			  </ol>
			</div>			
		</div>
	</section>
	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1"><?php the_title();?></h2>
			</div>
		</div>
	</section>
	
	<!-- Descrição da Notícia -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto mt-2">
				<!-- Descrição da Notícia -->
		        <p class="description-v-noticia"><?php the_excerpt();?> </p>
		        <small class="text mb-0">Equipe AEBA - Associação dos Empresários do Bairro do Alecrim</small>
				<p><small class="text-muted mt-0">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
				<div class="row-title mb-4"></div>
			</div>
			
			<!-- Imagem da Notícia -->
			<div class="col-lg-8 mx-auto">
				<img  class="col-12 p-0" src="<?php the_post_thumbnail();?>" alt="Imagem da Notícia">
				<p class="text-center mt-2"><small class="text">Legenda da imagem</small></p>
			</div>
		</div>
	</section>
	<!-- Texto da Notícia -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
<?php endwhile; endif; ?>


<!-- fim do loop notícia -->
<!-- Ler Mais Notícias -->
	<section class="container">
		<div class="row">
			<div class="col-lg-8 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Ler mais notícias</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>
	<!-- Cards horizontais de outras notícias -->
	<section class="container mt-2">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="card mb-0 border-0">
				  <div class="row no-gutters">
				    <div class="col-md-4 d-md-block d-none">
				      <img src="assets/img/image-noticia.png" style="width: 100%;" class="" alt="Imagem da Notícia">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body pt-lg-1 pt-sm-3">
				        <a href="#"><h5 class="card-title title-card-noticia">Título da notícia</h5></a>	
				        <p class="card-text card-description-v-noticia">Aliquam erat volutpat. Aliquam pretium odio non leo semper efficitur. Vivamus rhoncus, sem eu luctus interdum, nibh nunc commodo odio, a auctor lacus ante eget odio. In ac fermentum nulla.</p>
				        <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<!-- Linha de divisão das notícias		 -->
			<div class="col-lg-8 mx-auto mt-2">
				<div class="row-title mb-3"></div>
			</div>
		
			<div class="col-lg-8 mx-auto mt-2">
				<div class="card mb-0 border-0">
				  <div class="row no-gutters ">
				    <div class="col-md-4 d-md-block d-none">
				      <img src="assets/img/image-noticia.png" style="width: 100%;" class="" alt="Imagem da Notícia">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body pt-lg-1 pt-sm-3">
				      	<a href="#"><h5 class="card-title title-card-noticia">Título da notícia</h5></a>			
				        <p class="card-text card-description-v-noticia">Aliquam erat volutpat. Aliquam pretium odio non leo semper efficitur. Vivamus rhoncus, sem eu luctus interdum, nibh nunc commodo odio, a auctor lacus ante eget odio. In ac fermentum nulla.</p>
				        <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<!-- Linha de divisão das notícias		 -->
			<div class="col-lg-8 mx-auto mt-2">
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>
<?php get_footer();?>
</body>
</html>