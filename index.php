<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 require_once("class/class.php");
 $obj=new Trabajo();
 $productos=$obj->getProductos();

?>

<html>
    <head>

        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <title>..::Mi carrito::..</title>
        <link rel="icon" href="favicon.png" type="image/x-icon">
        <script src="../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="Scripts/intro.min.js"></script>
        <link href="Content/introjs.min.css" rel="stylesheet" />
        <link href="Content/introjs-nassim.css" rel="stylesheet" />

        <link href="Content/camperocssd9b5.css?v=4Yc2nL785nnts0gSCD8IR8lrTCi7rRCUg7x9ShiJBv41" rel="stylesheet"/>

        <script src="bundles/camperojsdb69?v=fXNiJNSQlYRyILeoCY9oE3Y-CoS4WgIMsFcDkaHFLzM1"></script>


        <script type="text/javascript" src="../cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script src="Scripts/stick-to-me.js"></script>




        <!-- Google Tag Manager -->
        <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MZ98RG3');</script>
        <!-- End Google Tag Manager -->
        <style>
            .modalVideo {
                position: fixed;
                width: 80%;
                left: 0;
                right: 0;
                margin: auto;
                top: 185%;
                right: 0;
                height: 520px;
                background: white;
                border-radius: 5px;
                box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
                z-index: 100;
                padding: 15px;
                box-sizing: border-box;
            }

            button.botonTutorial {
                position: fixed;
                left: 25px;
                bottom: 15px;
                z-index: 99;
                width: 50px;
                height: 50px;
                border-radius: 100%;
                border: none;
                font-size: 20px;
                background-color: #bbf005;
                box-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            }
               .boxNoTeVayas {
                width: 0;
                height: 0;
                margin: auto;
                position: fixed;
                overflow: hidden;
                padding: 10px;
                background: #ffffff;
                z-index: 9;
                transition: all 0.5s ease;
                top: 120%;
            }
            #stickLayer + .boxNoTeVayas.md-show {
                width: 380px;
                height: 664px !important;
                max-height: 90% !important;
                overflow: auto;
                z-index: 99;
            }
            .boxNoTeVayas img {
                width: 100%;
                max-height: 100%;
                height: auto;
            }
            .boxNoTeVayas.md-show .close {
    		    background: red;
    		    color: white;
    		    text-align: center;
    		    border-radius: 100%;
    		    height: 20px;
    		    width: 20px;
    		    top: 5px;
    		    right: 5px;
    		}
        </style>
        <link rel="stylesheet" href="Content/stick-to-me.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
         <body><div class="wrap-header"><div class="cart-bottom shoppingCart" data-step="3" data-intro="Revisa aquí tu pedido">
            <img src="Content/img/Basket-Cart-positive-40.png" style="width:28px;" class="fa fa-shopping-basket">
            <div class="contadorItems">
<?php require_once("header.php") ?>
            </div>
        </div>
        <div class="nav-header">
            <ul class="desktopMenu">
                <li id="menuCombos" class="activado">
                    Menús/Combos
                </li>
                <li id="menuBebidas">
                    Bebidas
                </li>
                <li id="menuApps">
                    Acompañantes
                </li>
                <li id="menuPostres">
                    Postres
                </li>
            </ul>
            <div class="btnMenuTop"><i class="fa fa-bars"></i></div>
            <a class="logoTop" href="index.php"><img src="Content/img/logobottom.png"></a>
            <a class="btnllamarTop" href="tel:2364-5682"><i class="fa fa-phone"></i></a>
            <a class="callNowDesktop"href="tel:+13174562564">Ordenar por teléfono</a>
            <div class="modalTelf">
                Disfruta del rico Sabor de Campero<br>
                Haz tu pedido vía telefónica al<br>
                <a href="tel:2364-5682">2364-5682</a>
                <div class="close"><span>+</span></div>
            </div>
        </div>
        <div class="slider-header">


                    <div dataname="60 Alitas" data-banneriditem="41948" class="bannerimg"><img src="Content/img/almuerzo_03.jpg"></div>
                    <div dataname="Pizza 4x4" data-banneriditem="41933" class="bannerimg"><img src="Content/img/almuerzo_04.jpg"></div>




        </div>
    </div>

              <div id="principal">
                <div id="content">
                    <?php

                     foreach ($productos as $pro):
                    ?>
                      <div class="fotos">
                           <h3><?php echo $pro['producto']; ?></h3>
            						   <img src="fotos/<?php echo $pro['name'].".jpg"; ?>">
                           <p><?php echo $pro["vig"]; ?></p>
                           <p><?php echo $pro["precio"]; ?></p>
                           <a class="btn" href="pro.php?id=<?php echo $pro['id']; ?>">detalle</a>
                      </div>
				          	 <?php
                          endforeach
                    ?>
                </div>
                  <!--********************contenedor****************************************-->
                <footer id="footer">pie de pagina</footer>
              </div>
    </body>
</html>
