<?php 
    include_once('twig/lib/Twig/Autoloader.php');
    Twig_Autoloader::register();
?>


<?php
/* Permet d'afficher les erreurs sous mac même quand on a pas trouvé la bonne conf d'apache ...(fichier php.ini dans /mamp/conf/) */
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
        
        <!-- BARRE DE NAVIGATION -->
        <?php 
            $loader = new Twig_Loader_Filesystem('Navbar'); // Dossier contenant les templates
            $twig = new Twig_Environment($loader, array('cache' => false));

//            echo $twig->render('navbar_1.php', array('iter' => 6));
            echo $twig->render('navbar_2.php', array('iter' => 6));
        ?>
        
        
        

        <div class="container">

            <div class="starter-template" style="border: 0px">
                <h1>Project Qualification</h1>
<!--                <p class="lead">Texte</p>-->
            </div>
  
            
        </div>
        
        
<!--
        <div class="container">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3 class="panel-title">Titre</h3>

                </div>

                <div class="panel-body">Contenu</div>

            </div>
            
        </div>
-->
        
        
        <div class="container form_general">
            <div class="row">
                <div class="col-md-12 redBorder">
                    <div class="row">
                          
                        <!-- BOUTON D'ACCUEIL, Choix des categories principales -->
                        <?php 
                            $loader = new Twig_Loader_Filesystem('BoutonAccueil'); // Dossier contenant les templates
                            $twig = new Twig_Environment($loader, array('cache' => false));

                            echo $twig->render('boutonAccueil_1.php', array('iter' => 6));
                        ?>

                        
                        <!-- FORMULAIRES -->
                        <?php 
                            $loader = new Twig_Loader_Filesystem('Form'); // Dossier contenant les templates
                            $twig = new Twig_Environment($loader, array('cache' => false));

                            echo $twig->render('form_window.php', array('iter' => 6));
                        ?>
                           
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!-- FORM: affiche/masque les formulaires-->
        <script>    
            function changeForm(pointer) {
                id_categorie = pointer.target.parentNode.firstElementChild.innerHTML;
//                alert(id_categorie)
                
                /*fenetre general*/
                var lienFenetreGeneral = document.querySelector('.categorie_conteneurGeneral');
//                alert(lienFenetreGeneral.innerHTML);
                var window_closed = 0;
                var window_to_close = 0;
                
                /* On regarde si la fenetre était déja fermée */
                if(lienFenetreGeneral.style.display = "none"){
                    window_closed = 1;
                }
                
                
                var lienFenetresCategories = document.querySelectorAll('.categorie_conteneur');
                /* On efface tous les block et on regarde si le bloc sélectionné était déja actif */
                for(var iter = 0; iter < lienFenetresCategories.length; iter++){
                    if((lienFenetresCategories[iter].style.display == "block") && (iter == id_categorie-1)){
                        window_to_close = 1;   
                    }
                    lienFenetresCategories[iter].style.display = "none";
                }
                
                /* Si la fenetre était déja fermé, on l'ouvre */
                if(window_closed == 1){
                    lienFenetreGeneral.style.display = "block";
                    lienFenetresCategories[id_categorie-1].style.display = "block";
                }
                /* Si la fenetre choisie était déja active => on ferme la fenetre */
                if(window_to_close == 1){
                    lienFenetreGeneral.style.display = "none";
                    lienFenetresCategories[id_categorie-1].style.display = "none";
                }

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
<!--        <script src="../jquery.js"></script>-->
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>