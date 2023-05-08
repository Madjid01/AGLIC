<?php

include_once('model/database.php');



function trier_dos(){
    $data=search_dossier();
    require_once('view/filtrer_dossier.php');
}



function afficher_lot_ctrl(){

    $lot = afficher_lot();
    require_once('view/list_lot.php');
}
function ctrl_afficher(){

  //  afficher();


    $data = afficher_dos();
    //$totalPages = total_pages_dossiers();
    //$users = limit_dos();


    
    

  require_once('view/gestionnaire.php');
  
}

function login_page(){

    require_once('view/login.php');
 
}

function cree_dos(){

    
    require_once('view/cree_dossier.php');

    dossier_to_db() ;
}

function afficher_dos_ctrl(){

    
    

}


?>