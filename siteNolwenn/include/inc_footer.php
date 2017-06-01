<!-- logo Develo'pont en position absolute dans le header -->
<p id="valid"><a href="http://simplon.co/" title="Aller sur le site Simplon" target="_blank"><img src="css/img/logo-simplon2.png" alt="logo Simplon"/></a></p>

<section>
<p>© 2017</p>
</section>


<section class="menu_footer">
  <ul>
    <li><a href="#">A propos</a></li>
    <li><a href="cgu.php">Mentions légales</a></li>
    <li><a href="#">Crédits</a></li>
  </ul>
</section>

<section class="floatleft margin_liens">
<h4>Liens sites internet</h4>
<ul class="lien_site clear">
	<li><a href="http://simplon.co/" title="simplon" target="_blank">Site de Simplon</a></li>
	<li><a href="http://simplon.co/pont-en-royans/" title="developont" target="_blank">Site de Dévelo'pont</a></li>
	<li><a href="http://vercors-pontenroyans.com/" title="pontenroyans" target="_blank">Site de Pont-en-Royans</a></li>
	<li><a href="https://www.legrand.fr/" title="legrand" target="_blank">Site de Legrand</a></li>
	<li><a href="https://fr-fr.facebook.com/Simplon.co/" title="simplonfb" target="_blank">Facebook de Simplon</a></li>
	<li><a href="https://www.facebook.com/developont/?hc_ref=PAGES_TIMELINE&fref=nf" title="developontfb" target="_blank">Facebook de Dévelo'pont</a></li>
	<li><a href="https://twitter.com/simplonco?lang=fr" title="simplontw" target="_blank">Twitter de Simplon</a></li>
	<li><a href="https://twitter.com/developont?lang=fr" title="developonttw" target="_blank">Twitter de Dévelo'pont</a></li>
	<li><a href="https://www.epn-du-royans.fr/" title="epn" target="_blank">EPN de Pont-en-Royans</a></li>
	<li><a href="http://www.europe-centre.eu/fr/42/Le_programme_LEADER.html" title="leader" target="_blank">Le Programme LEADER</a></li>
</ul>
</section>

<section class="floatleft">
<h4>Partenaires</h4>
<ul class="lien_photo clear">

	<li><a href="http://cc-royans-vercors.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logoCCPR.png" alt="pays_du_royans" width="100px" height="auto"></a></li>
	<li><a href="http://www.actu.saintmarcellin-vercors-isere.fr/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/thumbnail_Logo-ccpsg-provisoire2017.jpg" alt="sud_gresivaudan"  width="100px" height="auto"></a></li>
	<li><a href="http://www.emploi-pvsg.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logo-MdE_retenu_vert.jpg" alt="maison_emploi" width="100px" height="auto"></a></li>
	<li><a href="https://www.legrand.fr/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logo-legrand.png" alt="legrand" width="100px" height="auto"></a></li>
	<li><a href="http://www.vercors.net/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logoCCV.jpg" alt="commune_vercors" width="100px" height="auto"></a></li>
	<li><a href="http://www.vercors.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logo-CCMV.jpg" alt="massif_vercors" width="100px" height="auto"></a></li>
	<li><a href="http://meef26.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/LOGO_1.jpg" alt="maison_de_l'emploi" width="100px" height="auto"></a></li>

</ul>
</section>

<section class="clear">
</section>


<section> <!-- Bouton haut de page -->
    <div id="btn_up">
        <button id="bouton_fleche" type="button">
            <span class="fa-stack fa-lg"> <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </span>
        </button>
    </div>
</section>

<script src="javascript/jquery-3.2.1.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>

<!-- Animation bouton haut de page -->
<script type="text/javascript">
/*global $ */
$(function () {
    "use strict";
    $('#btn_up').click(function () {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() < 500) {
            $('#btn_up').fadeOut(500);
        } else {
            $('#btn_up').fadeIn(1000);
        }
    });
});
 </script>
