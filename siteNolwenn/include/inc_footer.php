<!-- logo Develo'pont en position absolute dans le header -->
<p id="valid"><a href="./" title="retour à l'accueil"><img src="css/img/logo-developont.png" alt="logo Develo'pont"/></a></p>

<ul class="lien_site">
	<li><a href="http://simplon.co/" title="simplon">Site de Simplon</a></li>
	<li><a href="http://developponts.enpc.org/" title="developont">Site de Dévelo'pont</a></li>
	<li><a href="http://vercors-pontenroyans.com/" title="pontenroyans">Site de Pont-en-Royans</a></li>
	<li><a href="https://www.legrand.fr/" title="legrand">Site de Legrand</a></li>
	<li><a href="https://fr-fr.facebook.com/Simplon.co/" title="simplonfb">Facebook de Simplon</a></li>
	<li><a href="https://www.facebook.com/developont/?hc_ref=PAGES_TIMELINE&fref=nf" title="developontfb">Facebook de Dévelo'pont</a></li>
	<li><a href="https://twitter.com/simplonco?lang=fr" title="simplontw">Twitter de Simplon</a></li>
	<li><a href="https://twitter.com/developont?lang=fr" title="developonttw">Twitter de Dévelo'pont</a></li>
	<li><a href="https://www.epn-du-royans.fr/" title="epn">EPN de Pont-en-Royans</a></li>
	<li><a href="http://www.europe-centre.eu/fr/42/Le_programme_LEADER.html" title="leader">Le Programme LEADER</li>
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
