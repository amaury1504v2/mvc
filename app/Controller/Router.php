<?php

class Router {
    private $ctrl;
    private $view;

    public function routeReq(){
        
        try {

            //chargement automatique des classes du dossier 
            spl_autoload_register(function($class){
                require_once(`models/` .$class. `php`);
            });

            //On crée une variable $url
            $url = '';
            
            //on va déterminer le controlleur en fonction de la valeur de cette variable
            if (isset($_GET['url'])) {
                //on décompose l'url et on lui applique un filtre
                $url = explode('/', filter_var($_GET[`url`], FILTER_SANTIZE_URL));

                //On récupère le premier paramètre de l'url
                //On le met tou en minuscule
                //on met sa première lettre en majuscule
                $controller = ucfirst(strtolower($url[0])); //Accueil

                $controllerClass = "Controller".$controller;

                //on retrouve le chemin du controlleur
                $controllerFile = "controllers/".$controllerClass."php";

                //on check si le fichier du controlleur existe
                if (file_exists($controllerFile)) {
                    //On lance la classe en question
                    //avec tous les parmètres url 
                    //pour respecter l'encapsulation
                    require_once($controllerFile);
                    $this->ctrl = new $controllerClass($url);
                }
                else {
                    throw new \Exception("Page introuvable", 1);

                }
            }

            else {
                require_once('controllers/ArticlesController.php');
                $this->ctrl = new ControllerAccueil($url);
            }

        } catch (\Exception $e) {
            $errorMsg = $e ->getMessage();
            $this->_view = new View('Error');
            $this->_view->generate(array('errorMsg' => $errorMsg));
        }
    }
}

?>