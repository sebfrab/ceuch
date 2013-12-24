<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<link rel="Shortcut Icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/sol.ico"/>
        <meta name="author" content="Sebastian Franco Brantes UTFSM - ¿y por qué no? - seb.frab@gmail.com"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="language" content="es" />
        <title><?php echo CHtml::encode("Cruzada Eucarística - El Sol"); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" />        
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
        
        <!-- Owl Carousel Assets -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.theme.css" rel="stylesheet">
	
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" />
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-23816005-1', 'cruzadaeucaristica.com');
            ga('send', 'pageview');
        </script>
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
</head>

<body>

        <header>
            <nav role="navigation">
                <div id="barraSuperior" class="navbar navbar-fixed-top">
                    
                    <div class="navbar-default navbar-collapse">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
                                    <span class="sr-only">Toggle</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>" class="navbar-brand"><img id="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" /></a>
                            </div>

                            <div class="navbar-collapse bs-js-navbar-collapse collapse">
                                <ul id="menu"  class="nav navbar-nav">
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/nosotros/">Nosotros</a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/eucaristia/">Eucarístia</a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/galeria/">Galeria</a></li>
                                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contact">Contacto</a></li>
                                </ul>
                                
                                <ul id="redesSociales" class="visible-md visible-lg visible-sm">
                                    <li><a target="_blank" href="http://www.facebook.com/ceuch" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" /></a></li>
                                    <li><a target="_blank" href="http://twitter.com/#!/ceuchelsol" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png" /></a></li>
                                    <li><a target="_blank" href="http://www.youtube.com/user/ceuchelsol" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/youtube.png" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>


	<?php echo $content; ?>

	<footer>
            <div class="container">
                <div id="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <p>Siguenos en @<a target="_blank" href="http://twitter.com/#!/ceuchelsol">ceuchelsol</a> 
                            >> Buscanos en <a target="_blank" href="http://www.facebook.com/ceuch">facebook.com/ceuch</a> 
                            >> Míranos en <a target="_blank" href="http://www.youtube.com/user/ceuchelsol">Youtube</a></p>
                        <p>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a> > 
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/nosotros/">Nosotros</a> > 
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/eucaristia/">Eucarístia</a> > 
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/galeria/">Galeria</a> > 
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contact">Contacto</a></p>  
                    </div>
                    <div class="col-lg-2">
                    </div>
               </div>
            </div>
            <div class="container">
               <div id="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                    <div id="author" class="col-lg-3">
                        <a href="#" title="&#191; y por qu&eacute; no &#63; / seb.frab@gmail.com">
                            <p>
                                ¿y por qué no? 
                                <p style="font-weight: bold; font-size: 12px;">Sebasti&aacute;n Franco</p>
                            </p>
                        </a>
                    </div>
               </div>
            </div>
        </footer>
        
        
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/collapse.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropdown.js"></script>
        
        <!-- Slider -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.carousel.min.js"></script>
        
        <!-- Add fancyBox -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/fancybox/jquery.fancybox.js"></script>
        
        
        <script type="text/javascript">
            $(document).ready(function() {
               //$('.dropdown-toggle').dropdown();
               $(".fancybox").fancybox();
               
               $('#owl-demo').owlCarousel({
                    autoPlay : 6000,
                    stopOnHover : true,
                    navigation:false,
                    paginationSpeed : 1000,
                    goToFirstSpeed : 2000,
                    singleItem : true,
                    autoHeight : true,
                    transitionStyle:"fade"
               });
               
               $('#owl-galeria').owlCarousel({
                    autoPlay: 7000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3]
               });
               
            });
        </script>

</body>
</html>
