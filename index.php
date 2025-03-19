<?php 
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = "Acceuil";
}

switch ($action) {
    case "Acceuil":
    $titre = "Accueil";
    $css="Style/acceuil.css";
    require_once "include/entete.php";
    require_once "acceuil.php";
    require_once "include/pied.php";
    break;

    case "Projets":
        $titre = "Mes Projets";
        $css="Style/projet.css";
        require_once "include/entete.php";
        require_once "projet.php";
        require_once "include/pied.php";
        break;

    
    case "Tutoriel":
         $titre = "Mes Tutoriels";
         $css="Style/projet.css";
         require_once "include/entete.php";
        require_once "tutoriel.php";
        require_once "include/pied.php";
        break;

    case "Tuto1":
        $titre = "Mes Tutoriels";
        $css="Style/tuto1.css";
        require_once "include/entete.php";
        require_once "tuto1.php";
        require_once "include/pied.php";
        break;
        case "Tuto2":
            $titre = "Mes Tutoriels";
            $css="Style/tuto2.css";
            require_once "include/entete.php";
            require_once "tuto2.php";
            require_once "include/pied.php";
            break;
       
   
        case "Cv":
        $titre = "Mon Cv";
        $css="Style/cv.css";
        require_once "include/entete.php";
        require_once "cv.php";
        require_once "include/pied.php";
        break;

        case "Contact":
            $titre = "Me contacter";
            $css="Style/contact.css";
            require_once "include/entete.php";
            require_once "contact.php";
            require_once "include/pied.php";
            break;
            
        case "Projet1":
            $titre = "BipBipBat";
             $css="Style/projet1.css";
            require_once "include/entete.php";
            require_once "projet1.php";
            require_once "include/pied.php";
            break;
                 
        case "Projet2":
            $titre = "BipBipMat";
             $css="Style/projet1.css";
            require_once "include/entete.php";
            require_once "projet2.php";
            require_once "include/pied.php";
            break;
                 
        case "Projet3":
            $titre = "Ecole Etoile";
             $css="Style/projet1.css";
            require_once "include/entete.php";
            require_once "projet3.php";
            require_once "include/pied.php";
            break;
                 
        case "Projet4":
            $titre = "GSB";
             $css="Style/projet1.css";
            require_once "include/entete.php";
            require_once "projet4.php";
            require_once "include/pied.php";
            break;
                  
        case "Projet5":
                $titre = "GSB";
                 $css="Style/projet1.css";
                require_once "include/entete.php";
                require_once "projet5.php";
                require_once "include/pied.php";
                break;

        case "Veille":
            $titre = "Veille Technologique";
            $css="Style/veille.css";
           require_once "include/entete.php";
           require_once "veille.php";
           require_once "include/pied.php";
           break;
        case "Veille1":
        $titre = "Veille Technologique";
        $css="Style/veille1.css";
        require_once "include/entete.php";
        require_once "veille1.php";
        require_once "include/pied.php";
        break;
        case "Veille2":
            $titre = "Veille Technologique";
            $css="Style/veille1.css";
            require_once "include/entete.php";
            require_once "veille2.php";
            require_once "include/pied.php";
            break;
        case "Veille3":
            $titre = "Veille Technologique";
            $css="Style/veille1.css";
            require_once "include/entete.php";
            require_once "veille3.php";
            require_once "include/pied.php";
            break;
                 
             
}