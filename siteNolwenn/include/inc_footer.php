<!-- logo Develo'pont en position absolute dans le header -->
<p id="valid"><a href="./" title="retour à l'accueil"><img src="css/img/logo-developont.png" alt="logo Develo'pont"/></a></p>

<ul class="lien_site">
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


<ul class="lien_photo">
	<li><a href="http://www.royans.com/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logoCCPR.png" alt="pays_du_royans"></a></li>
	<li><a href="http://www.actu.saintmarcellin-vercors-isere.fr/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/thumbnail_Logo-ccpsg-provisoire2017.jpg" alt="sud_gresivaudan"></a></li>
	<li><a href="http://www.emploi-pvsg.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logo-MdE_retenu_vert.jpg" alt="maison_emploi"></a></li>
	<li><a href="https://www.legrand.fr/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logo-legrand.png" alt="legrand"></a></li>
	<li><a href="http://www.vercors.net/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logoCCV.jpg" alt="commune_vercors"></a></li>
	<li><a href="http://www.vercors.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/logo-CCMV.jpg" alt="massif_vercors"></a></li>
	<li><a href="http://meef26.org/" target="_blank"><img src="http://simplon.co/wp-content/uploads/2017/01/LOGO_1.jpg" alt="maison_de_l'emploi"></a></li>
</ul>
	

<p> © 2017 </p>

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
<script src="./javascript/accordeon.js"></script>

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
