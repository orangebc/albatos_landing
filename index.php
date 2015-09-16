<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Albatros. Líder Proveedor de Equipo contra Incendio.</title>

    <meta name="description" content="La empresa más confiable en la República Mexicana para hacerte llegar todo lo que necesitas para recargar y vender equipo contra incendio. 27 AÑOS DE EXPERIENCIA NOS RESPALDAN">

    <meta name="keywords" content="Extintores, señalamientos, p.q.s., pqs, extinguidores, botiquines, proteccion civil, planes de proteccion civil, trajes de bombero, uniformes de bombero, señalamientos, seguridad en la oficina, seguridad en fabricas, seguridad en empresas, detectores de humo, hidrantes, prevención de incendios, comprar, equipo de seguridad, venta de extintores, recarga de extintores, extintores en mexico, como usar extintores">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff ">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff ">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var clickTrackAccountId=9404,clickTrackPageId="e69e0d23";(function(){function e(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src=("https:"==document.location.protocol?"https":"http")+"://www.lightedpages.com/hm/js/clicktrack.min.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}if(window.attachEvent)window.attachEvent("onload",e);else window.addEventListener("load",e,false)})()
    </script>
  </head>
<body>
         
	<!--Header-->
    <header class="header">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <div class="header__logo">
                    <img src="images/logoalbatros.png" alt="Albatros">
                </div>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-6">
                <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
                    <div class="header__contact-info">
                        <ul class="list-inline text-right">
                            <li class="icon-phone">
                                01 (55) 1054 5208 <br>
                                01 (55) 1054 5209 <br>
                                01 (55) 4602 1120
                            </li>
                            <li class="icon-mail">
                                <a href="mailto:ventas@albatrosextintores.mx?Subject=Landing%20Page%20Albatros" taget="_top">ventas@albatrosextintores.mx</a> <br>
                                <span class="invisible">Email</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 col-xs-12">
                    <div class="header__callToAction">
                        <button class="btn header__btn toggle-form">Contacto <span class="hidden-xs">| Cotizaciones</span></button>
                    </div>
                </div>
                <div class="col-xs-12 text-right hidden-sm hidden-md hidden-lg">
                    <button class="btn header__mh glyphicon glyphicon-menu-hamburger toggle-form"></button>
                </div>
            </div>
        </div>
    </header>
    <!--/header -->
    
    <!--Form -->
    <main class="main">
        <span class="glyphicon glyphicon-remove"></span>
        <form action="php/send.php" method="POST" role="form" id="form">
        <legend class="visible-xs askfor">Solicitar una cotización</legend>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduce tu nombre" maxlength="40" required>
            </div>        
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Introduce tus apellidos" required>
            </div>        
            <div class="form-group">
                <label for="email">Mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="e.j. email@tudominio.com" required>
            </div>        
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="tel" name="celular" class="form-control" id="celular" placeholder="Celular a 10 digitos" maxlength="10" onkeypress="return isNumberKey(event)" required>
            </div>        
            <div class="form-group">
                <label for="comentarios">¿Qué necesita cotizar?</label>
                <textarea name="comentarios" id="comentarios" class="form-control" required></textarea>
            </div>
        
            
            <input type="submit" name="submit" class="btn btn-main" value="Enviar">
        </form>
    </main>
    <!--/form -->
    
    
    <!-- Slider -->
    <section class="slider">
        <div id="albatros-carousel" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/img-slide1.jpg" alt="slider-albatros">
              <div class="carousel-caption">
                <h1 class="slider__caption">Venta de equipo contra incendio <small>Extintores, señalamientos, hidrantes, botiquines, detectores de humo entre otros productos</small><span>expertos en envíos a toda la república</span></h1>
              </div>
            </div>
            <div class="item">
              <img src="images/img-slide2.jpg" alt="slider-albatros">
              <div class="carousel-caption">
                <h1 class="slider__caption">Equipo contra incendio para <small>Distribuidores, recargadores, cuerpos de rescate y de bomberos</small><span>industria de alto y bajo riesgo</span></h1>
              </div>
            </div>
            <div class="item">
              <img src="images/img-slide3.jpg" alt="slider-albatros">
              <div class="carousel-caption">
                <h1 class="slider__caption">Industria de alto y bajo riesgo <small>Centros comerciales, oficinas, hospitales, restaurantes entre otros</small><span>expertos en envíos a toda la república</span></h1>
              </div>
            </div>
            <div class="item">
              <img src="images/img-slide4.jpg" alt="slider-albatros">
              <div class="carousel-caption">
                <h1 class="slider__caption">Equipo de seguridad <small>para casas, departamentos, conjuntos habitacionales</small><span>expertos en envíos a toda la república</span></h1>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#albatros-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#albatros-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
    </section>
    <!-- /slider-->
    
     <!--Bienvenida-->
     <section class="img-bienvenida">
     	<div class="container">
        	<p class="p-img-bienvenida">La empresa más confiable en la República Mexicana para hacerte llegar todo lo que necesitas para recargar y vender equipo contra incendio.</p>
            <h2 class="h2-img-bienvenida">Somos fabricantes <br>28 Años de experiencia nos respaldan</h2>
        </div>
     </section>
      <!--/bienvenida-->
    
        
    <!--Extintores -->
    <section class="section-albatros-extintores">    	
    	<h3 class="p-albatros-extintores">Albatros Extintores</h3>
    <div class="container container-albatros-extintores">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="div-albatros-extintores">
            	    <h4 class="h4-albatros-extintores">Amplio Catálogo</h4>
                    <p class="catalogo">Tenemos un amplio catálogo de productos que cumplen con las normas vigentes y que se adaptan a tus necesidades.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="div-albatros-extintores">
            	    <h4 class="h4-albatros-extintores">Logística para envíos</h4>
                    <p class="catalogo">Nos aseguramos de que cada uno de nuestros clientes reciba su pedido completo, a tiempo y de manera adecuada. Más de 60 destinos a nivel nacional.</p>
                </div>
            </div>
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="div-albatros-extintores">
            	    <h4 class="h4-albatros-extintores">Seguridad, Confiabilidad</h4>
                    <p class="catalogo">Trabajamos con los transportistas líderes en México, asegurando una entrega puntual y de bajo costo en tu domicilio.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="div-albatros-extintores">
            	    <h4 class="h4-albatros-extintores">Calidad Garantizada</h4>
                    <p class="catalogo">Supervisamos que cada producto enviado cumpla con altos estándares de calidad y certificación.</p>
                </div>
            </div>
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="div-albatros-extintores">
            	    <h4 class="h4-albatros-extintores">Envíos a toda la república</h4>
                    <p class="catalogo">Enviamos tu pedido a cualquier destino <br> en la República Mexicana.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="div-albatros-extintores">
            	    <h4 class="h4-albatros-extintores">Atención especializada</h4>
                    <p class="catalogo">Atención especializada a recargadores, distribuidores, cuerpo de bomberos, fábricas, hospitales, corporativos, comercios y casas.</p>
                </div>
            </div>
    </div>
    </section>        
    <!-- /extintores -->
    
	<!-- Productos -->
 	<section class="section-imagenes">
    	<div class="container-fluid no-space">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-1">
                <div class="galley__item">
                    <img src="images/ic-servicios1.png">   
                    <h4 class="h4-imagenes">Extintores</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-2">
                <div class="galley__item">
                    <img src="images/ic-servicios2.png">   
                    <h4 class="h4-imagenes">P.Q.S.</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-3">
                <div class="galley__item">
                    <img src="images/ic-servicios3.png">   
                    <h4 class="h4-imagenes">Señalamientos</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-4">
                <div class="galley__item">
                    <img src="images/ic-servicios4.png">   
                    <h4 class="h4-imagenes">Gabinetes</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-5">
                <div class="galley__item">
                    <img src="images/ic-servicios5.png">   
                    <h4 class="h4-imagenes">Botiquines</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-6">
                <div class="galley__item">
                    <img src="images/ic-servicios6.png">   
                    <h4 class="h4-imagenes">Refacciones</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-7">
                <div class="galley__item">
                    <img src="images/ic-servicios7.png">   
                    <h4 class="h4-imagenes">Mangueras</h4>                    
                </div>                    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 background-servicios s-8">
                <div class="galley__item">
                    <img src="images/ic-servicios8.png">   
                    <h4 class="h4-imagenes">Herrajes</h4>                    
                </div>                    
            </div>
        </div>
    </section>
  	<!-- /productos -->
    
    <!-- Sectores -->
    <section class="section-sectores">
    	<h3 class="p-albatros-extintores">Sectores</h3>
    	<div class="container-fluid container-sectores">
        	<div class="row row-sectores">
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sectores-container">
                        <figure class="sectores__icon">
                            <img src="images/ic-sec1.png">
                        </figure>
                        <hr class="sectores-sep">
                        <h4 class="h4-sectores">Recargadores <br> y distribuidores</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sectores-container">
                        <figure class="sectores__icon">
                	       <img src="images/ic-sec2.png">
                       </figure>
                        <hr class="sectores-sep">
                	   <h4 class="h4-sectores">Cuerpo de bomberos <br> y rescate</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sectores-container">
                        <figure class="sectores__icon">
                    	   <img src="images/ic-sec3.png">
                        </figure>
                        <hr class="sectores-sep">
                    	<h4 class="h4-sectores">Industrias <br> y comercio</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="sectores-container">
                        <figure class="sectores__icon">
                	       <img src="images/ic-sec4.png">
                       </figure>
                        <hr class="sectores-sep">
                	   <h4 class="h4-sectores">Casas, oficinas, <br> y hospitales</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /sectores-->    
    <!-- whoIs -->
    <section class="productos">
    	<div class="container">
        	<p class="p-productos">En Albatros Extintores trabajamos para brindarte la mejor opción donde comprar</p>
            <h3 class="h3-productos">Equipo contra incendio</h3>
        </div>
    </section>
    <!--/whoIs -->    
    <!-- logoAlbatros -->
    <section class="logo-albatros">
    	<div class="container">
           	<img src="images/logoalbatros.png">
        </div>
    </section>
    <!-- /logoAlbatros -->    
    <!-- Footer -->
    <footer>
    	<h3 class="h3-footer"><strong>Landing page</strong> | www.orangeboutiquecreativa.com</h3>
    </footer>
    <!-- /footer-->   

   <script>
       function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
   </script> 
    <?php include('html/bottom.php'); ?>
</body>
</html>