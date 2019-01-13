<?php

/**
* Fonction échappant les caractères html dans $message
* @param  string $message chaîne à échapper
* @return string          chaîne échappée
*/
function e($message){
return htmlspecialchars($message, ENT_QUOTES);
}


function jName($nomSintitule){
    $tab=explode('/',$nomSintitule);
    return $tab[0];
}

function redirection(){

  if(!isset($_SESSION["connecte"])){
    header('Location: ?controller=connexion&action=ouverture_connexion');
    exit();
  }
}

function redirection2(){

  if(isset($_SESSION["connecte"])){
    header('Location: ?controller=home');
    exit();
  }
}
?>
