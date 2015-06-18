<?php
include_once('twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('Form'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));
?>


<?php
/* Permet d'afficher les erreurs sous mac même quand on a pas trouvé la bonne conf d'apache (fichier php.ini dans /mamp/conf/) */
ini_set('display_errors','on');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Offre Qualification</title>

        <!-- Bootstrap core CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../starter-template.css" rel="stylesheet">
        <link href="../tuto.css" rel="stylesheet">
        <link href="../buttons_1.css" rel="stylesheet">



        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed test1" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BALYO</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://www.balyo.com/">Home</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#about">Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

<!--        <div class="container yellowBorder">-->
        <div class="container">

            <div class="starter-template">
                <h1>Titre</h1>
<!--                <p class="lead">Texte</p>-->
            </div>
  
            
        </div><!-- /.container -->
        
        
 
        <div class="container form_general">

            <div class="row">

                <div class="col-md-12 redBorder">

                    <div class="row">
                        <div class="col-md-12 blueBorder form_titles">
                            
                            <div class="row">
                                
<!--
                                <div class="col-md-2 blueBorder selectCategorie"><span style="display:none">1</span>Catégorie 1</div>
                                <div class="col-md-2 blueBorder selectCategorie"><span style="display:none">2</span>Catégorie 2</div>
                                <div class="col-md-2 blueBorder selectCategorie"><span style="display:none">3</span>Catégorie 3</div>
                                <div class="col-md-2 blueBorder selectCategorie"><span style="display:none">4</span>Catégorie 4</div>
                                <div class="col-md-2 blueBorder selectCategorie"><span style="display:none">5</span>Catégorie 5</div>
                                <div class="col-md-2 blueBorder selectCategorie"><span style="display:none">6</span>Catégorie 6</div>
-->
                                
                                
                                <div class="col-md-2 col-sd-1 blueBorder selectCategorie">
                                    <span style="display:none">1</span>
                                    <button type="button" class="btn btn-hot text-uppercase btn-lg expendButton">Catégorie 1</button>
                                </div>
                                
                                <div class="col-md-2 col-sd-1 blueBorder selectCategorie">
                                    <span style="display:none">2</span>
                                    <button type="button" class="btn btn-hot text-uppercase btn-lg expendButton">Catégorie 2</button>
                                </div>
                                <div class="col-md-2 blueBorder selectCategorie">
                                    <span style="display:none">3</span>
                                    <button type="button" class="btn btn-hot text-uppercase btn-lg expendButton">Catégorie 3</button>
                                </div>
                                <div class="col-md-2 blueBorder selectCategorie">
                                    <span style="display:none">4</span>
                                    <button type="button" class="btn btn-hot text-uppercase btn-lg expendButton">Catégorie 4</button>
                                </div>
                                <div class="col-md-2 blueBorder selectCategorie">
                                    <span style="display:none">5</span>
                                    <button type="button" class="btn btn-hot text-uppercase btn-lg expendButton">Catégorie 5</button>
                                </div>
                                <div class="col-md-2 blueBorder selectCategorie">
                                    <span style="display:none">6</span>
                                    <button type="button" class="btn btn-hot text-uppercase btn-lg expendButton">Catégorie 6</button>
                                </div>

                                
                                
                                
<!--                                        <h2>3D Buttons</h2>-->
<!--
                                        <div class="well text-center">
                                            <button type="button" class="btn btn-hot text-capitalize btn-xs">hot button</button>
                                            <button type="button" class="btn btn-sunny text-capitalize btn-xs">Sunny button</button>
                                            <button type="button" class="btn btn-fresh text-capitalize btn-xs">Fresh button</button>
                                            <button type="button" class="btn btn-sky text-capitalize btn-xs">Sky button</button>
                                        </div>
-->
<!--
                                        <div class="well text-center">
                                            <button type="button" class="btn btn-hot text-uppercase btn-sm">hot button</button>
                                            <button type="button" class="btn btn-sunny text-uppercase btn-sm">Sunny button</button>
                                            <button type="button" class="btn btn-fresh text-uppercase btn-sm">Fresh button</button>
                                            <button type="button" class="btn btn-sky text-uppercase btn-sm">Sky button</button>
                                        </div>
-->
<!--
                                        <div class="well text-center">
                                            <button type="button" class="btn btn-hot text-uppercase">hot button</button>
                                            <button type="button" class="btn btn-sunny text-uppercase">Sunny button</button>
                                            <button type="button" class="btn btn-fresh text-uppercase">Fresh button</button>
                                            <button type="button" class="btn btn-sky text-uppercase">Sky button</button>
                                        </div>
-->
<!--
                                        <div class="well text-center">
                                            <button type="button" class="btn btn-hot text-uppercase btn-lg">Catégorie 1</button>
                                            <button type="button" class="btn btn-sunny text-uppercase btn-lg">Catégorie 2</button>
                                            <button type="button" class="btn btn-fresh text-uppercase btn-lg">Catégorie 3</button>
                                            <button type="button" class="btn btn-sky text-uppercase btn-lg">Catégorie 4</button>
                                            <button type="button" class="btn btn-sky text-uppercase btn-lg">Catégorie 5</button>
                                            <button type="button" class="btn btn-sky text-uppercase btn-lg">Catégorie 6</button>
                                        </div>
-->

                                    
                            </div>

                        </div>

                        
                        
                        
                        <div class="col-md-12 blueBorder categorie_conteneurGeneral form_titles"  style="display:block">
                            <div class="row">

                            <?php 
                                echo $twig->render('form_window.php', array('iter' => 6));
                            ?>
            
                            </div>
                        </div>
                       
                        
                        

                    </div>

                </div>

            </div>

        </div>
        
        
        
        
        <script>    
            function changeForm(pointer) {
                id_categorie = pointer.target.parentNode.firstElementChild.innerHTML;
//                alert(id_categorie)
                
                
                var lienFenetresCategories = document.querySelectorAll('.categorie_conteneur');
                for(var iter = 0; iter < lienFenetresCategories.length; iter++){
                    lienFenetresCategories[iter].style.display = "none";
                }
                lienFenetresCategories[id_categorie-1].style.display = "block";

            }
            
            var lienChoixCategories = document.querySelectorAll('.selectCategorie');
            for(var i = 0; i < lienChoixCategories.length; i++){
                lienChoixCategories[i].addEventListener('click', function(e) {changeForm(e);}, false);
//                alert(lienChoixCategories[i].firstElementChild.nextElementSibling.innerHTML);
            }
        </script>
        
        
        
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>