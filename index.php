<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Despacho jurídico especializado en proteger tu patrimonio ante los riegos del arrendamiento. No te dejes engañar, no todo es lo que parece
    ">
    <meta name="author" content="Perla Holguín">
    <title>Tarian | Protección Patrimonial | Servicios Jurídicos Inmobiliarios. </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icons/fav.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/simpletextrotator.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!--animaciones  para la página-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <a class="button-whatsapp" href="https://api.whatsapp.com/send?phone=528127480049">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- <span class="ir-arriba"><i class="fas fa-arrow-up"></i></span> -->

    <section id="intro">
        <div id="nav">
            <nav class="navbar yellow container">

                <ul class="navbar justify-content-xs-end">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="tel:8121671060"><i class="fas fa-phone"> </i> <span
                                class="ocultar-texto-header">81 2167 1060</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:contacto@tarianasesores.com.mx">
                            <i class="fas fa-envelope"></i>
                            <span class="ocultar-lg">E-mail</span>
                            <span class="ocultar-texto-header"> contacto@tarianasesores.com.mx</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

        <div class="navbar-navegar">
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="logo-espacio">
                            <img src="images/icons/Logo.png" alt="logo" class="logo">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <nav id="main-nav" class="main-nav">
                            <div class="menu-bar">
                                <div class="uno"></div>
                                <div class="dos"></div>
                                <div class="tres"></div>
                                <div class="cuatro"></div>
                            </div>
                            <ul class="navegar-pagina">

                                <li class="navegar-pagina-item">
                                    <a href="#" class="menu-link">Inicio</a>
                                </li>
                                <li class="navegar-pagina-item">
                                    <a href="#servicios" class="menu-link">Servicios</a>
                                </li>
                                <li class="navegar-pagina-item">
                                    <a href="#polizas" class="menu-link">Coberturas</a>
                                </li>
                                <li class="navegar-pagina-item">
                                    <a href="#contact-form" class="menu-link">Contacto</a>
                                </li>

                            </ul>

                        </nav>
                    </div>

                </div>

            </div>
        </div>



        <div class="container ">
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 ">
                    <img src="images/icons/Logo.png" alt="Logo" width="120" class="imagen-logo">
                    <h1 class="">¡En Tarian Protegemos Tu Patrimonio! </h1>

                    <h4 class="envios3-title">¿Buscas vender, rentar o comprar una casa y minimizar riesgos?</h4>
                    <p class="white"> Como despacho jurídico te ofrecemos el beneficio de proteger tu patrimonio ante
                        los riegos del
                        arrendamiento. No te dejes engañar, no todo es lo que parece.</p> <br>

                    <h3 class="subt"><span class="rotate">Servicios Jurídicos Inmobiliarios | Investigación |
                            Recuperación extrajudicial | Recuperación judicial
                            | Cobranza judicial de rentas | Juicio oral civil </span>
                    </h3>


                    <div class="row centrar">
                        <a href="tel:8121671060">
                            <button class="btn-1" data-aos="fade-left" data-aos-duration="1800"> Llámanos</button>
                        </a>
                        <a href="#polizas"> 
                            <button class="btn-poliza" data-aos="fade-left" data-aos-duration="1800">
                                Ver Cobertura
                            </button>
                        </a>
                    </div>
                </div>
                <div class="COL-XS-12 contacto col-sm-12 col-md-4 ml-auto oculto-1">
                    <h3 class="white contact-texto">Déjanos tus datos y te llamaremos en breve.</h3>
                    <form id="contact-form" method="post" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div id="mensajeErr-Status" class="correct"></div>
                        <div class="ajax-hidden">
                            <div class="form-group">
                                <label class="sr-only" for="c_name">Nombre</label>
                                <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Nombre">
                                <div id="nombre-status" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_phone">Teléfono </label>
                                <input type="tel" id="c_phone" class="form-control" name="c_phone"
                                    placeholder="Teléfono">
                                <div id="telefono-status" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_email">E-mail </label>
                                <input type="email" id="c_email" class="form-control" name="c_email"
                                    placeholder="E-mail">
                                <div id="email-status" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="c_message" name="c_message" rows="5"
                                    placeholder="Mensaje"></textarea>
                                <div id="mensaje-status" class="status-fields"></div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="c_terms" class="form-check-input" id="cterms">
                                <label class="form-check-label" for="cterms" style="color:white;"><a class="color" href="privacidad.html"> Acepto política de
                                    privacidad  </a> </label>
                                
                            </div>
                            <div id="terms-status" class="status-fields"></div>

                            <button type="submit" class="btn-enviar" id="btn-ajax">
                                Enviar
                            </button>
                            <input type="hidden" name="ajax">
                        </div>
                        <div class="ajax-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="envios">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 envios-section">
                    <h2 class="envios2-title">Protege tu patrimonio ahora!</h2>

                    <p> Con nuestras <strong>Coberturas jurídicas de arrendamiento</strong></p>
                </div>
                <div class="col-xs-12 col-sm-5 envios-mapa">
                    <a href="#polizas">
                        <button class="btn-4" data-aos="zoom-out"> Ver Coberturas</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="titulo-servicios container" data-aos="fade-up">
        <h2 class="text-center">Servicios</h2>
        <!--<hr style="border: 2px solid #001F38; width:20%; margin-bottom: 0px">-->

        <div class="row">
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-8"> <span class="subtitulo-servicios ">
                    <span class="subtitulo-servicios" style="width:60%;"> Garantizamos tu tranquilidad, conservamos y protegemos legalmente tus inmuebles; nuestra misión es asegurar la confianza del arrendador.</span>
                </span></div>
            <div class="col-xs-12 col-md-2"></div>
        </div>
    </section>

    <!--Servicios sección-->
    <section class="servicios" data-aos="fade-up" data-aos="fade-up" data-aos-duration="1800">

        <div class="container">
            

            <div class="row justify-content-xs-center">
                
           
                <div class="col-xs-12 col-md-6  services-padding ">
                    <img src="images/icons/Recurso18.png" alt="Servicios legales inmobiliarios" width="45"
                        class="oculto imagen-servicios">
                    <h5 class="transporte-service">Servicios legales inmobiliarios</h5>
                    <br>
                     <div class="media">
                      <img class="d-flex mr-3" src="images/icons/Recurso15.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium"> Investigación del prospecto inquilino.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            Investigamos antecedentes penales, antecedentes en tribunales locales 
                            y del fuero federal, historial crediticio, registro público de la 
                            propiedad y del comercio y referencias por medio de las cuales se 
                            analiza el perfil de la persona. 
                        </p>
                       
                      </div>
                    </div> <br>
                    <div class="media">
                      <img class="d-flex mr-3" src="images/icons/contrato.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium"> Elaboración y/o modificación del contrato de arrendamiento.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            Redactamos el contrato a celebrar con tu inquilino, resguardando a 
                            detalle la esfera jurídica del inmueble y del propietario. 
                        </p>
                      </div>
                    </div> <br>
                    <div class="media">
                      <img class="d-flex mr-3" src="images/icons/asistencia.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium">  Asistencia Personalizada.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            Te respaldamos en todo momento, un abogado te asistirá de manera 
                            presencial el día establecido para la elaboración del contrato de 
                            arrendamiento, de igual manera para la entrega del inmueble al 
                            finalizar el contrato de arrendamiento. 
                        </p>
                      </div>
                    </div> <br>
                    <div class="media">
                      <img class="d-flex mr-3" src="images/icons/Recurso17.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium">  Gestión de cobranza extrajudicial. </h6>
                        <p class="text-left" style="font-size:12px;"> 
                            ¿Tu inquilino se atrasó con la renta o servicios?, nuestros abogados 
                            por medio de la vía extrajudicial tendrán acercamiento con el inquilino
                            a fin de regularizar los pagos vencidos. 
                        </p>
                      </div>
                    </div> <br>
                    <div class="media ">
                      <img class="d-flex mr-3" src="images/icons/Recurso18.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium">  Cobranza Judicial.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            ¡El inquilino hizo caso omiso a la gestión extrajudicial!, no te preocupes, 
                            existen tribunales donde nuestros abogados capacitados en la materia iniciaran 
                            una demanda por la cual a través de un juez se le requerirá el cobro del adeudo… 
                            Pero ¿Qué crees? Nuestra cobertura ya incluye el inicio, desahogo y fin de este 
                            juicio. 
                        </p>
                      </div>
                    </div>
                    <div class="media ">
                      <img class="d-flex mr-3" src="images/icons/asesoria.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium">  Asistencia Legal.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            Que no exista el “hubiera” “a lo mejor” o “quizás” … Resolveremos tu 
                            duda al momento. Durante los 13 meses de cobertura tendrás asistencia 
                            legal por parte de un abogado que atenderá todas las situaciones que 
                            se desprendan durante el arrendamiento. 
                        </p>
                      </div>
                    </div>
                     
                </div>
                
                 <div class="col-xs-12 col-md-6 services-padding">
                      <img src="images/icons/Recurso19.png" alt="Otros Servicios" width="45"
                        class="oculto imagen-servicios">
                    <h5 class="transporte-service"> Conservación patrimonial</h5>  <br>
                     <div class="media">
                      <img class="d-flex mr-3" src="images/icons/inspeccion.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium">Revisión periódica del inmueble.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            ¿No tienes idea del estado físico de tu propiedad?, no te preocupes 
                            ¡Nosotros te lo decimos!, contamos con el respaldo de arquitectos e 
                            ingenieros con la más alta calidad en trabajos de construcción y 
                            mantenimiento, mismos que acudirán a tu propiedad el primer mes de 
                            arrendamiento, al sexto y al recibir el inmueble a fin de validar el 
                            status del mismo. 
                        </p>
                      </div>
                    </div> <br>
                     <div class="media">
                      <img class="d-flex mr-3" src="images/icons/contrato.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium"> Constancias y reportes de las condiciones del inmueble.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            En cada una de las visitas de revisión se te hará llegar una constancia de 
                            la visita así como un reporte detallado de las condiciones en que se 
                            encontraba 	el inmueble.    
                        </p>
                      </div>
                    </div> <br>
                    <div class="media">
                      <img class="d-flex mr-3" src="images/icons/mantenimiento.png" alt="Investigacion" width="30">
                      <div class="media-body">
                        <h6 class="mt-0 font-weight-medium">  Mantenimiento y/o reparación de daños por el uso normal del inmueble.</h6>
                        <p class="text-left" style="font-size:12px;"> 
                            Podrás contar con el servicio de Mantenimiento Menor del inmueble 
                            durante la vigencia de la cobertura. 
                        </p>
                      </div>
                    </div> <br>
                   
                </div>
                

                <!--<div class="col-xs-12 col-md-4 services-padding " data-aos="fade-up" data-aos-duration="1300">-->
                <!--    <img src="images/icons/Recurso16.png" alt="Transporte Marítimo" width="45"-->
                <!--        class="oculto imagen-servicios">-->
                <!--    <h5 class="transporte-service">Recuperación judicial  y extrajudicial </h5>-->
                <!--    <p class="transportacion"> Recuperación de inmueble mediante lanzamiento judicial y-->
                <!--        extrajudicial del inmueble arrendado <br>-->
                       
                <!--    </p>-->
                <!--</div>-->

               

                <!--<div class="col-xs-12 col-md-4 services-padding" data-aos="fade-up" data-aos-duration="1300">-->
                <!--    <img src="images/icons/Recurso17.png" alt="Transporte Ferroviario" width="45"-->
                <!--        class="oculto imagen-servicios">-->
                <!--    <h5 class="transporte-service">-->
                <!--       Gestión de cobranza preventiva.-->
                <!--    </h5>-->
                <!--    <p class="transportacion">Cobranza judicial de rentas adeudadas mediante-->
                <!--        embargo de bienes y/o embargo de salario-->
                <!--    </p>-->
                <!--</div>-->

                <!--<div class="col-xs-12 col-md-4 services-padding" data-aos="fade-up" data-aos-duration="1000">-->
                <!--    <img src="images/icons/Recurso18.png" alt="Servicios Especiales" width="45"-->
                <!--        class="oculto imagen-servicios">-->
                <!--    <h5 class="transporte-service">Juicio oral civil</h5>-->
                <!--    <p class="transportacion">-->
                <!--         Acciones legales por incumplimientos y daños al inmueble-->

                <!--    </p>-->
                <!--</div>-->
                <!--<div class="col-xs-12 col-md-4 services-padding" data-aos="fade-up" data-aos-duration="1300">-->
                <!--    <img src="images/icons/proteccion.png" alt="Otros Servicios" width="45"-->
                <!--        class="oculto imagen-servicios">-->
                <!--    <h5 class="transporte-service">-->
                <!--        Cobertura hasta 13 meses*.-->
                <!--    </h5>-->
                <!--    <p class="transportacion">-->
                       
                <!--    </p>-->
                <!--</div>-->
                
                

            </div>
        </div>
    </section>

    <section id="polizas" class="ventajas">
        <div class="container ">
            <div class="titulo-servicios justify-content-center">
                <h2 class="text-center">Cobertura</h2>
                <div class="row">

                    <div class="col-xs-12 col-md-12">
                        <span class="subtitulo-servicios" style="width:60%;">
                            Sabemos que lo más importante para ti es el bienestar de tu patrimonio, es por ello
                            que en Tarian te brindamos
                            <br>
                            las mejores soluciones que se fijan en la tranquilidad de tu familia, además de las
                            coberturas más completas y a los
                            mejores precios.
                        </span>
                    </div>
                </div>
            </div>


            <div class="row ventajas-margen">
                <table class="table table-responsive-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="titulos-tabla">COBERTURAS</th>
                            <th scope="col" class="titulos-tabla">BÁSICA</th>
                            <th scope="col" class="titulos-tabla">COMPLETA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                Promover la recuperación del inmueble por la falta de pago de rentas
                            </th>
                            
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Gestión extrajudicial
                            </th>
                           
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Elaboración del contrato de arrendamiento
                            </th>
                          
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Asistencia de un abogado a la firma del contrato
                            </th>

                           
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Asistencia de un abogado y elaboración del convenio en la devolución voluntaria del
                                inmueble
                            </th>
                           
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Honorarios de los abogados
                            </th>
                          
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Promover la recuperación del inmueble por vencimiento de contrato
                            </th>
                          
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Investigación en Registro Publico Inquilino.
                            </th>
                           
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">

                                Investigación en Registro Publico Fiador.
                            </th>
                           
                            <td></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                Promover la cobranza judicial de adeudos a causa de rentas y servicios.
                            </th>
                           
                            <td></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">

                                Cobranza extrajudicial de daños ocasionados al inmueble
                            </th>
                           
                            <td></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                        <tr>
                            <th scope="row">

                                Servicio de conservación del inmueble
                            </th>
                           
                            <td></td>
                            <td><img src="images/icons/correct-symbol.png" alt="" class="img-check"></td>
                        </tr>
                    </tbody>
                </table>
 <br>
                
                <a href="images/coberturas.pdf" download="Tarian Cobertura 2019" class="btn-download" >Descargar Precios</a>
            </div>

        </div>
    </section>

    <section class="cobertura">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h2 class="text-center">Nuestros Clientes</h2>
                </div>
            </div>

            <div class="oculta-md">
                <div class="row" data-aos="fade">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/Recurso20.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/logo_huva.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/Recurso22.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/Recurso23.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                    <!--/col-->
                </div>
            </div>

            <div class="oculta-lg">
                <div class="row owl-carousel owl-theme" data-aos="fade">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/Recurso20.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/logo_huva.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/Recurso22.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="images/icons/Recurso23.png" alt="Clientes-Tarian" class="clientes-logo">
                    </div>
                    <!--/col-->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </section>

    <section class=" mostrar-1 text-center ">
        <div class="container">

            <div class="row justify-content-center">
                <div class="titulo-servicios container">
                    <h2 class="text-center">Contacto</h2>

                    <hr style="border: 2px solid #61AA8B; width:20%; margin-bottom: 0px"> <br>
                    <span class="subtitulo-servicios" style="width:60%;">Será un gusto contactarnos contigo.</span>
                    <form style="padding: 30px 20px;" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact-form2"
                        method="post" role="form">
                        <div class="ajax-hidden">
                            <div class="form-group">
                                <label class="sr-only" for="c_name2">Nombre</label>
                                <input type="text" id="c_name2" class="form-control" name="c_name2" placeholder="Nombre">
                                <div id="nombre-status2" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_phone2">Telefono </label>
                                <input type="tel" id="c_phone2" class="form-control" name="c_phone2"
                                    placeholder="Teléfono">
                                <div id="telefono-status2" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="c_email2">E-mail </label>
                                <input type="email" id="c_email2" class="form-control" name="c_email2"
                                    placeholder="E-mail">
                                <div id="email-status2" class="status-fields"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="c_message2" name="c_message2" rows="7"
                                    placeholder="Mensaje"></textarea>
                                <div id="mensaje-status2" class="status-fields"></div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="c_terms2" class="form-check-input" id="cterms2">
                                <label class="form-check-label" for="cterms2"> <a href="privacidad.html" >Acepto política de privacidad</a> </label>
                            </div>
                            <div id="terms-status2" class="status-fields"></div>

                            <button type="submit" class="btn-enviar" id="btn-ajax2">
                                ENVIAR
                            </button>
                            <div id="mensajeErr-Status2" class="correct"></div>
                            <input type="hidden" name="ajax2">
                        </div>
                        <div class="ajax-response"></div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 text-xs-center text-md-left"> 
                    <img src="images/icons/Logo.png" alt="" class="img-logo-footer">

                    <p class="white" style="text-align:left">
                        En TARIAN SERVICIOS JURÍDICOS brindamos servicios legales de
                        protección de inmuebles ante los riesgos del arrendamiento

                    </p>
                    <br>
                    <div class="oculto-movil">
                        <p class="white">&copy;Copyright Tarian Servicios Jurídicos 2019. Todos los derechos reservados
                            <a class="color" href="privacidad.html"> Política de
                                Privacidad |
                            </a>
                            <a class="color" href="http://www.3e-digital.com/" target="_blank">
                                Diseñado por 3e-Digital
                            </a>
                        </p>
                    </div>

                </div>

                <div class="col-6 col-sm-6 col-md-2 align-self-top">
                    <div class="padding-footer-links">
                      
                        <h3 class="white">LINKS</h3>

                        <ul>
                            <li class="footer-link">
                                <a href="#intro">INICIO</a>
                            </li>
                            <li class="footer-link">
                                <a href="#servicios">SERVICIOS</a>
                            </li>
                            <li class="footer-link">
                                <a href="#polizas">COBERTURAS</a>
                            </li>
                            <li class="footer-link">
                                <a href="#contact-form">CONTACTO</a>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class="col-6 col-sm-6 col-md-4 align-self-top">
                   
                    <h3 class="white">CONTÁCTANOS</h3>

                    <ul>
                        <li>
                            <a href="tel:812167106">
                                <i class="fas fa-phone white"> </i><span style="margin-left:10px;">81 2167 1060 </span> 
                            </a>
                        </li>
                        
                        <li class="oculto-movil">
                            <a href="mailto:contacto@tarianasesores.com.mx" >
                                <i class="fas fa-envelope white"></i> <span style="margin-left:10px;"> E-mail </span>
                            </a>
                        </li>
                        <li class="oculto-web">
                            <a href="mailto:contacto@tarianasesores.com.mx">
                                <i class="fas fa-envelope white"></i><span style="
                                    margin-left:14px;">Email</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="oculto-web" style="margin-left:14px; margin-right:15px; text-align:left;">
                    <p class="white" style="text-align:left">&copy;Copyright Tarian Servicios Jurídicos 2019.
                        Todos los derechos reservados.
                        <br> <a class="color" href="privacidad.html"> Política de
                            Privacidad |
                        </a>
                        <a class="color" href="http://www.3e-digital.com/" target="_blank">
                            Diseñado por 3e-Digital
                        </a>
                    </p>
                </div>

            </div>
            <!--/row-->
        </div>
        <!--container-->
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/custom.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        $(".rotate").textrotator({
            animation: "dissolve",
            separator: "|",
            speed: 2000
        });
    </script>
</body>

</html>
