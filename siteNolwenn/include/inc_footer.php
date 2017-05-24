<!-- logo Develo'pont en position absolute dans le header -->
<p id="valid"> <a href="./" title="retour à l'accueil"><img src="css/img/logo-developont.png" alt="logo Develo'pont"/></a></p>
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
