<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include('include/inc_head.php') ?>
	<meta name="description" content="titre de la page"/>
	<title>A propos</title>
</head>

<body role="document">
	<div class="content">
		<header class="header" role="banner">
				<?php include('include/inc_header.php') ?>
		</header>

		<nav class="menu" role="navigation">
		<?php $nav_en_cours = 'apropo'; ?>
		<?php include('include/inc_menu.php') ?>
		</nav>

		<main id="main" role="main">

							<section class="apropo_presentation">
									<h3>Présentation de l'équipe de création de la page</h3>
								<article> 
									<p>Nous avons été cinq personnes de la formation dévelo'pont pont en royans, a faire cette
									page internet dans le cadre de la formation.
									Le site à donc été développer par :</p>
								</article>	
								
								<article>	
																	
									<p>Benoit</p><a href="galerie/photo_individuel/BenoitLa.jpg" class="photo_apropo1" data-title="Benoît" data-lightbox="roadtrip"><img src="galerie/photo_individuel/photos_150/BenoitLax150.jpg" alt="Benoît" /></a>
									
									<p>Frederique (chef de projet)</p><a href="galerie/photo_individuel/Fred2.jpg" class="photo_apropo2" data-title="Fred" data-lightbox="roadtrip"><img src="galerie/photo_individuel/photos_150/Fredx150.jpg" alt="Fred" /></a>
									
									<p>Mylène</p><a href="galerie/photo_individuel/Mylene.jpg" class="photo_apropo3" data-title="Mylene" data-lightbox="roadtrip"><img src="galerie/photo_individuel/photos_150/Mylenex150.jpg" alt="Mehdi" /></a>
					   			
					   			<p>Nima</p><a href="galerie/photo_individuel/Nima.jpg" class="photo_apropo4"data-title="Nima" data-lightbox="roadtrip"><img src="galerie/photo_individuel/photos_150/Nimax150.jpg" alt="Nima" /></a>
					  				
					  				<p>Nolwenn</p><a href="galerie/photo_individuel/Nolwenn.jpg" class="photo_apropo5" data-title="Nolwenn" data-lightbox="roadtrip"><img src="galerie/photo_individuel/photos_150/nolwennx150.jpg" alt="Norlwenn" /></a>

									<p>Ce projet a été realiser en 2 semaines, dans le cadre de la realisation d'un site web en 
									groupe de 5 personnes, et de l'usage du plateau SCRUM, afin de coordonnée le travail.</p>
								</article>
							</section>
					</main>

		<!-- Pied de page -->
		<footer id="footer" role="contentinfo">
		<?php include('include/inc_footer.php') ?>
		</footer>

	</div><!-- fin #content -->
</body>




</html>
