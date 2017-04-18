<?php include_once ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
	<title>Seguimos pidiendo Justicia – Amnistía Internacional</title>
    <meta name="description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma y pide al gobierno que no se olvide de ellas.">
	<link rel="canonical" href="<?php echo URL_SITE; ?>" />
    <link rel="image_src" href="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
    <link rel="icon" href="favicon.ico?v=3" type="image/x-icon" />
    <meta name="pinterest-rich-pin" content="false" />
    <meta name="pinterest" content="nopin" />
    <!--Open Graph-->
    <meta property="og:url" content="<?php echo URL_SITE; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:title" content="Seguimos pidiendo Justicia" />
    <meta property="og:description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma y pide al gobierno que no se olvide de ellas." />
    <meta property="og:site_name" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <meta property="og:image" content="<?php echo URL_SITE; ?>images/compartir-fb-2.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!--Twitter Cardas-->
    <meta name="twitter:url" content="<?php echo URL_SITE; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@amnistiaespana">
    <meta name="twitter:creator" content="@amnistiaespana">
    <meta name="twitter:title" content="Seguimos pidiendo Justicia" />
    <meta name="twitter:description" content="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma y pide al gobierno que no se olvide de ellas." />
    <meta name="twitter:image" content="<?php echo URL_SITE; ?>images/compartir-tw-2.png" />
    <meta name="twitter:image:width" content="1024" />
    <meta name="twitter:image:height" content="512" />
    <meta name="twitter:image:alt" content="Seguimos pidiendo Justicia – Amnistía Internacional" />
    <!--.Open Graph-->
    <!-- jQuery 1.12.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- CSS Bootstrap v4.0.0 -->
    <link href="css/bootstrap-flex.css" rel="stylesheet">
    <!-- CSS Reticula -->
    <link href="css/reticula.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Style.css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- hover.min.css -->
    <link href="css/hover.min.css" rel="stylesheet">
    <!-- cli-style.css -->
    <link href="css/cli-style.css" rel="stylesheet">

    <!-- tether.min Obligatorio para BS tooltip -->
    <script src="js/tether.min.js"></script>
    <!-- Bootstrap v4.0.0 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- cookielawinfo.js -->
    <script src="js/cookielawinfo.js"></script>

    <!-- Init -->
    <script src="js/init.js"></script>

	<!-- Tipografía Maven -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet">

</head>
<body>
    <div class="KW_progressContainer">
        <div class="KW_progressBar">
        </div>
    </div>

    <!-- Modal Video -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-track-content data-content-name="justiciapornavidad"  data-content-piece="video">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:_paq.push(['trackEvent', 'Saltar_video', 'Click']);">
              <span aria-hidden="true">Saltar video</span>
            </button>

            <div class="video-container">
                <div id="video"></div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal Carta petición -->
    <?php include "includes/peticion.php";?>

    <!-- Header -->
    <?php include "includes/header-home.php";?>



	<section class="modulo-home clearfix">
        <div class="rrss">
            <ul class="clearfix">
                <li><a data-shareurl="<?php echo URL_SITE . TRACK_FB_UTM; ?>" data-title="Seguimos pidiendo Justicia" data-texto="Miles de personas 'desaparecidas' durante la guerra civil y el franquismo no volvieron a casa. Firma y pide al gobierno que no se olvide de ellas." data-imagen="<?php echo URL_SITE; ?>images/compartir-fb-2.png" data-caption="Amnistía Internacional" class="fa fa-facebook-official hvr-shrink facebook-share" href="#" title="Compartir en Facebook"></a></li>
                <!--<li><a data-shareurl="<?php echo urlencode( URL_SITE . TRACK_TW_UTM) ; ?>" data-texto="Los 'desaparecidos' durante la guerra civil y el franquismo no volvieron a casa. Firma y pide #JusticiaPorNavidad" class="fa fa-twitter hvr-shrink twitter-share" title="Compartir en Twitter" href="#"></a></li>-->
                <li><a data-shareurl="<?php echo urlencode('https://goo.gl/AlHkRv') ; ?>" data-texto="Los 'desaparecidos' durante la guerra civil y el franquismo no volvieron a casa. Firma y pide Justicia" class="fa fa-twitter hvr-shrink twitter-share" title="Compartir en Twitter" href="#"></a></li>
<?php
    if($isMobile) {

?>
                <li><a class="fa fa-whatsapp hvr-shrink" title="Compartir en Whatsapp" data-href="<?php echo URL_SITE; ?>" data-action="share/whatsapp/share" href="whatsapp://send?text=<?=urlencode('Seguimos pidiendo Justicia – Amnistía Internacional https://goo.gl/DequCx')?>"></a></li>
<?php
}
?>
            </ul>
        </div>




		<div class="container">
            <div class="box-text row center middle">
                <div class="col-12">
                    <h2>Seguimos pidiendo<br/>que vuelva la justicia</h2>
                    <p>Firma y pide justicia para Flor, Antonio, Felisa y miles de víctimas de la guerra civil y el franquismo.</p>

                    <!--<a id="myplay" class="hvr-grow" href="#" title="play" data-toggle="modal" data-target="#videoModal"><img src="images/play-button.png" alt="play"></a>-->
                </div>
            </div>
		</div><!-- /container -->
	</section><!-- /modulo-home -->

    <!-- Módulo Firma -->
    <?php include "includes/firma-form.php";?>

    <section class="modulo-historias clearfix" data-track-content data-content-name="justiciapornavidad" data-content-piece="historias">
        <div class="container-full">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 historias-bg">
                    <div class="box-text">
                        <h3>Tres historias de personas que aún luchan por la justicia.</h3>
                        <p>Entre las personas que “no volvieron” durante la guerra civil y el franquismo, hay miles de casos de <b>desapariciones forzadas, de bebés robados a sus familias, de personas ejecutadas y enterradas en fosas comunes, y de torturas que nunca se han investigado.</b> </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 historias" style="background: url('images/caso-felisa.jpg');">

                    <div class="box-text">
                        <h3>Felisa Echegoyen, la historia de una mujer torturada.</h3>
                        <a href="felisa-echegoyen" class="btn-historias">Conoce la historia de Felisa</a>
                    </div>
                    <a href="felisa-echegoyen" class="capa"></a>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 historias" style="background: url('images/caso-flor.jpg');">

                    <div class="box-text">
                        <h3>Flor Díaz, la historia de un bebé robado.</h3>
                        <a href="flor-diaz" class="btn-historias">Conoce la historia de Flor</a>
                    </div>
                    <a href="flor-diaz" class="capa"></a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 historias" style="background: url('images/caso-antonio.jpg');">

                    <div class="box-text">
                        <h3>Antonio Narváez, sus padres están en una fosa común.</h3>
                        <a href="antonio-narvaez" class="btn-historias">Conoce la historia de Antonio</a>
                    </div>
                    <a href="antonio-narvaez" class="capa"></a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 sms-bg">
                    <div class="row middle center">
                        <div class="col-12">
                            <div class="box-text">
                                <p><b><span>Envía un SMS</span></b> con la palabra</p>
                                <div class="btn-sms"><p><b>JUSTICIA</b> al 28014</p></div>
                                <p>para donar 1,20€* y colaborar con la campaña.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 derecho" style="background: url('images/justicia.jpg');">
                    <div class="row middle center">
                        <div class="col-12">
                            <div class="box-text">
                                <h3>Pedimos que volviera la <br/><span class="gotham">#</span>JusticiaPorNavidad</h3>
                                <a href="seguimos-pidiendo-justicia" class="btn-ver-video hvr-sweep-to-bottom" title="Ver campaña">Ver campaña</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /row -->

        </div><!-- /container -->
    </section><!-- /modulo-historias -->

    <section class="modulo-gobierno bg-white clearfix" data-track-content data-content-name="justiciapornavidad" data-content-piece="gobierno">
        <div class="container">
            <div class="box-text">
                <h3>¿Qué le pedimos al gobierno?</h3>

                <p><b>Pedimos al gobierno español que no se olvide de las víctimas del franquismo durante esta legislatura.</b></p>

                <p>Que investigue y no ponga obstáculos a la investigación de las miles de desapariciones forzadas y otras graves violaciones de derechos humanos, como aquellas de las que fueron y son víctimas Felisa, Flor o Antonio.</p>

                <p>Que asegure el <b>derecho a la verdad, la justicia y la reparación</b> para todas ellas, tal y como exigen las resoluciones de Naciones Unidas y el derecho internacional que España está obligada a cumplir.</p>
            </div>
        </div><!-- /container -->
    </section><!-- /modulo-gobierno -->


    <section class="modulo-socio bg-gray clearfix" data-track-content data-content-name="justiciapornavidad"  data-content-piece="socio">
        <div class="container">
            <div class="box-text">
                <h3>Hazte socio/a.<br/>Puedes hacer más por los que sufren.</h3>

                <p>Que se haga justicia depende de personas valientes como Flor, Antonio y Felisa. Y de personas como tú. Si podemos hacer este campaña es porque no aceptamos subvenciones de gobiernos ni donaciones de partidos políticos. Ser socio/a es garantizar nuestra independencia para defender a las víctimas de las más graves violaciones de derechos humanos en cualquier lugar del mundo.</p>

                <p><b>Sin ti, no hay Amnistía Internacional. Por eso, necesitamos tu apoyo.</b></p>

                <a class="btn-hazte-socio hvr-sweep-to-bottom" href="https://crm.es.amnesty.org/unete-a-amnistia-justicia?origen=justiciapornavidad" title="Hazte Socio/a" target="_blank">Hazte Socio/a</a>

            </div>
        </div><!-- /container -->
    </section><!-- /modulo-socio -->


    <!-- Footer -->
    <?php include "includes/footer.php";?>

    <!-- Boton Firma -->
    <a href="#firma" title="Firma" class="boton-fijo btns btn-firma hvr-sweep-to-bottom">Firma</a>

    <!-- cookies  -->
    <?php include "includes/cookies.php";?>

    <!-- pixel google  -->
    <?php include ("includes/pixelret.php"); ?>


</body>
</html>
