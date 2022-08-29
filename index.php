<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
    <title>Radio Decibelios</title>
</head>

<body>
    <header>
        <nav class="nav">
            <div class="nav__logo">
                <a href="index.html"><img src="imagenes/LogoRadio.png" alt=""></a>
            </div>
            <div class="nav__enlaces">
                <a href="#">Información</a>
                <a href="#">Contacto</a>
                <a href="#">Publicidad</a>
                <a href="#">¿No hay sonido?</a>
            </div>
        </nav>
    </header>
    <main class="main">
        <section class="online">
            <div class="online__directo">
                <div class="directo__emisora">
                    <div>
                        <img id="imagenRadio" src="" alt="">
                    </div>
                    <div>
                        <p id="nombreRadio"></p>
                        <p id="frecuenciaRadio"></p>
                    </div>
                </div>
                <div class="directo__audio">
                    <audio src="media/prueba.mp3" class="audio" id="audio" controls></audio>
                </div>
            </div>
            <div class="online__listadotop">
                <p class="listadotop__titulo">TOP 5 </p>
                <div class="listadotop__top" id="ranking">
                    <div class="top__seccion">
                        <p class="top__seccion__radio">1.- <span class="variable" id="top1">---------</span></p>
                        <a href="#" target="_blank"><i class="fas fa-step-forward"></i></a>
                    </div>
                    <div class="top__seccion">
                        <p class="top__seccion__radio">2.- <span class="variable" id="top2">---------</span></p>
                        <a href="#" target="_blank"><i class="fas fa-step-forward"></i></a>
                    </div>
                    <div class="top__seccion">
                        <p class="top__seccion__radio">3.- <span class="variable" id="top3">---------</span></p>
                        <a href="#" target="_blank"><i class="fas fa-step-forward"></i></a>
                    </div>
                    <div class="top__seccion">
                        <p class="top__seccion__radio">4.- <span class="variable" id="top4">---------</span></p>
                        <a href="#" target="_blank"><i class="fas fa-step-forward"></i></a>
                    </div>
                    <div class="top__seccion">
                        <p class="top__seccion__radio">5.- <span class="variable" id="top5">---------</span></p>
                        <a href="#" target="_blank"><i class="fas fa-step-forward"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="emisoras">
            <h1 class="emisoras__h1">DIRECTOS</h1>
            <div class="emisoras__listado" id="emisoras_listado">
                <div class="listado__items"><img src="imagenes/40-principales.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/cadena-100.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/cadena-digital.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/canal-fiesta.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/canal-sur-radio.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/cat-radio.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/cope.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/dial.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/es-radio.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/esencia-radio.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/europa.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/flaix.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/flaixbac.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/flamenco.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/gum-fm.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/hit.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/ibiza-global-radio.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/ibiza-sonica.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/jfk.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/kiss-fm.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/la-bomba.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/loca-fm.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/m-80.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/maxima.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/onda-cero.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/rac-10-5.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/rac1.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/rne.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio3.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-4.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-5.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-andalucia.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-capital.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-clasica.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-maria.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/radio-ole.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/rock-fm.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/rtt.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/ser.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/tre.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/xtra-fm.png" alt=""></div>
                <div class="listado__items"><img src="imagenes/xtra-fmbrava.png" alt=""></div>
            </div>
            <div class="emisoras__adicional">
                <p>HAZ CLICK PARA ESCUCHAR LA RADIO</p>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="email">
            <p><a href="mailto:hola@radiodecibelios.es">| hola@radiodecibelios.es |</a></p>
        </div>
        <div class="sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="js/js.js"></script> -->
    <script src="js/app.js"></script>
    <script src="js/base_datos.js"></script>
</body>

</html>