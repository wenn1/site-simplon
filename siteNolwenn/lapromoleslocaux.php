<!doctype html>
<html lang="fr">
	<head>
			<?php include('include/inc_head.php') ?>
			<meta name="description" content="titre de la page"/>
			<title>La Promo/Les Locaux</title>
	</head>

	<body role="document">
			<div class="content">
					<nav class="skip"><?php include('include/inc_skip.php') ?>
					</nav>

					<!-- En-tête de page -->
					<header class="header" role="banner">
							<?php include('include/inc_header.php') ?>
					</header>

					<!-- barre principale de navigation -->
					<nav class="menu" role="navigation"><?php include('include/inc_menu.php') ?>
					</nav>

					<!-- Page principale -->
					<article id="main" role="main">
          <div id="ancre_main"></div>
						<h3>La promo / Les locaux</h3>
							<section>
								 <h4>La promo</h4>
						</section>
					</article>

					<!-- Partie latérale -->
					<aside id="aside" role="complementary"><?php include('include/inc_aside.php') ?>
					</aside>
					<!-- Pied de page -->
					<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
					</footer>

			</div><!-- fin #content -->
	</body>
</html>
