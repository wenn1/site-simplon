<!doctype html>
<html lang="fr">
	<head>
		<?php include('include/inc_head.php') ?>
		<meta name="description" content="galerie interactive"/>
		<title>Galerie</title>
		<link href="css/flexslider.css" rel="stylesheet"/>
	</head>

	<body class="galerie" role="document">
		<div class="content">
			<header class="header" role="banner">
					<?php include('include/inc_header.php') ?>
			</header>
			<nav class="menu" role="navigation">
			<?php $nav_en_cours = 'slider'; ?>
			<?php include('include/inc_menu.php') ?>
			</nav>

			<article id="main2" role="main">
			<div id="ancre_main"></div>
				<section>
					<h3 class="heading_page">Galerie interactive</h3>
					 <h4>Photos de la promotion</h4>
				</section>

				<section id="sliderpromo">
				<h4>sliders</h4>
				<!-- Place somewhere in the <body> of your page -->
					<div class="flex-container">
          <div class="flexslider">
						<ul class="slides">
							<li data-thumb="galerie/sliderphoto1.jpg">
							  <img src="galerie/sliderphoto1.jpg" alt="Photo 1" width="140px"/>
							  <p class="flex-caption">Photo de la promotion au bord de la Vernaison</p>
							</li>
							<li data-thumb="galerie/sliderphoto3.jpg">
							  <img src="galerie/sliderphoto3.jpg" alt="Photo 3" width="140px"/>
							  <p class="flex-caption">En classe</p>
							</li>
							<li data-thumb="galerie/sliderphoto4.jpg">
							  <img src="galerie/sliderphoto4.jpg" alt="Photo 4" width="140px"/>
							  <p class="flex-caption">En classe</p>
							</li>
							<li data-thumb="galerie/sliderphoto5.jpg">
							  <img src="galerie/sliderphoto5.jpg" alt="Photo 5" width="140px"/>
							  <p class="flex-caption">En classe</p>
							</li>
							<li data-thumb="galerie/sliderphoto6.jpg">
							  <img src="galerie/sliderphoto6.jpg" alt="Photo 6" width="140px"/>
							  <p class="flex-caption">En classe</p>
							</li>
							<li data-thumb="galerie/sliderphoto7.jpg">
							  <img src="galerie/sliderphoto7.jpg" alt="Photo 7" width="140px"/>
							  <p class="flex-caption">En route pour la médiathèque</p>
							</li>
							<li data-thumb="galerie/sliderphoto9.jpg">
							  <img src="galerie/sliderphoto9.jpg" alt="Photo 9" width="140px"/>
							  <p class="flex-caption">Exposition Thibault Brunet à la médiathèque de Pont en Royans</p>
							</li>
							<li data-thumb="galerie/sliderphoto10.jpg">
							  <img src="galerie/sliderphoto10.jpg" alt="Photo 10" width="140px"/>
							  <p class="flex-caption">Construction de maquettes avec des légos</p>
							</li>
							<li data-thumb="galerie/sliderphoto11.jpg">
							  <img src="galerie/sliderphoto11.jpg" alt="Photo 11" width="140px"/>
							  <p class="flex-caption">Construction de maquettes avec des légos</p>
							</li>
					  </ul>
				</div>
        </div>
				</section>
			</article>

				<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
				</footer>

			</div><!-- fin #content -->

	</body>
</html>
