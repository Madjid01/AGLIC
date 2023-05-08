<?php


function database_connection(){

    $pdo = new PDO('mysql:dbname=gssprod; host=localhost' , 'root' ,'' ) ;
    return $pdo;


}

function afficher(){

  $pdo = database_connection();
  
 
//  $id_cmp = $_POST['id_cmp'];
//  $login = $_POST['login'];
//  $pass = $_POST['pass'];
//  $nom = $_POST['nom'];
//  $comptes = $_POST['comptes'];
//  $sinistre = $_POST['sinistre'];
//  $id_adr = $_POST['id_adr'];
  //$id_cmp;
  //$login;
  //$pass;
  //$nom;
  //$comptes;
  //$sinistre;
  //$id_adr;
  
  
  $result = $pdo->query("SELECT * FROM accassu  ")->fetchAll(PDO::FETCH_OBJ);
  
  return $result;
  
  }



function total_pages_dossiers(){
// Calculate the total number of pages
$pdo = database_connection();

$recordsPerPage = 10;
$query = "SELECT COUNT(*) AS count FROM dossiers";
$stmt = $pdo->prepare($query);
$stmt->execute();
$count = $stmt->fetchColumn();
$totalPages = ceil($count / $recordsPerPage);

return $totalPages;
}


function limit_dos(){
  $conn = database_connection();
// Calculate the offset for the current page
$recordsPerPage = 10;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($currentPage - 1) * $recordsPerPage;

// Retrieve the data for the current page
$query = "SELECT * FROM dossiers LIMIT $recordsPerPage OFFSET $offset";
$stmt = $conn->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $users;
}

function dossier_to_db(){

  $pdo = database_connection();

  if (isset($_POST["submit"])){

    extract($_POST);
/*
  $lib_dos=$_POST['lib_dos'];
  $etat_dos=$_POST['etat_dos'];
  $date_crea_dos=$_POST['date_crea_dos'];
  $id_pol=$_POST['id_pol'];
  */

 $result= $pdo->query("INSERT INTO `dossiers` (`id_dos`, `lib_dos`, `etat_dos`, `date_crea_dos`, `date_sus_dos`, `date_rep_dos`, `date_clo_dos`, `id_pol`, `date_reg_dos`, `date_rec_dos`, `mode_reg_dos`, `type_dos`, `id_user_tech`, `id_user_fin`, `mtt_dos`, `notif_dos`) VALUES (NULL, '$lib_dos', '$etat_dos', '$date_crea_dos', NULL, NULL, NULL, '$id_pol', NULL, NULL, 'Virement-Individuel', '1', '1', '1', '0.00', '0'); ");

return $result;
  }
}



function afficher_dos(){

  $pdo = database_connection();

  

  $result =$pdo-> query("SELECT * FROM `dossiers`");


return $result->fetchAll(PDO::FETCH_OBJ);
}


function search_dossier(){

$pdo= database_connection();

if (isset($_post['btn_search'])) {
  # code...

$search= $_POST["search"];

  $result =$pdo-> query("SELECT * FROM `dossiers` where lib_dos LIKE '%$search%' OR etat_dos LIKE '%$search%' OR date_crea_dos LIKE '%$search%' ");


return $result->fetchAll(PDO::FETCH_OBJ);

}






}
function afficher_lot(){

  $pdo = database_connection();

  

  $result =$pdo-> query("SELECT * FROM `lots`");


return $result->fetchAll(PDO::FETCH_OBJ);
}

/*



function lot_to_db(){
  $pdo = database_connection();

if (isset($_post["Submit"])){
  extract($_POST);

  $result = $pdo-> query("INSERT INTO `lots` (`id_lot`, `lib_lot`, `etat_lot`, `id_et_lot`, `id_dos`, `id_adr`, `id_pol`, `id_af_lot`, `sel_lot`, `id_user`, `date_clot`) 
  VALUES ($lib_lot, $etat_lot , $id_dos, $id_adr, $id_pol, $id_af_lot, $sel_lot, $id_user, $date_clot) ");

return $result;
}
}



function update_dos($id){
  $pdo = database_connection();
  $id = $_GET['id_dos'];

if (isset($_post["Submit"])){
  extract($_post);

  $result = $pdo-> query("UPDATE `dossier` SET lib_dos = $lib_dos , etat_dos=$etat_dos, date_crea_dos= $date_crea_dos, id_pol= $id_pol WHERE id='$id'");

return $result;
}
}

function update_lot($id){


  $pdo= database_connection();
  $id = $GET['id_lot'];

if (isset ($_POST["Submit"])){
  extract($_post);
  $result = $pdo -> query("UPDATE `lots` SET lib_lot=$lib_lot, etat_lot=$etat_lot, id_adr=$id_adr, id_pol=$id_pol, sel_lot=$sel_lot, id_user=$id_user, date_clot=$date_clot WHERE id =$id)");

return $result;
}
}

function delete_dos($id){

  $pdo =database_connection();
  $id = $GET['id_dos'];

if (isset ($_POST["Submit"])){  
  extract($_POST);

  $result = $pdo -> query("DELETE `dosssier`  WHERE id = $id");

return $result;
  }
}

function delete_lot($id){
  $pdo =database_connection();
  $id = $GET['id_lot'];

if (isset ($_POST["Submit"])){
  $result = $pdo -> query("DELETE `lots` WHERE id = $id");

return $result; 
}
}

function operation_to_db(){
  $pdo = database_connection();
  
if (isset ($_POST["Submit"])){
  $result = $pdo -> query ("INSERT INTO `operation` (`id_op`, `coef_op`, `fr_op`, `rem_cnas`, `rem_ent`, `id_act`, `id_benef`, `li_op`, `date_op`, `id_lot`, `id_prest`, `id_pra`, `id_pre`, `adr_pre`, `id_user`, `dat_crea`, `etat_op`, `id_motif`) 
  VALUES ($id_op, $coef_op, $fr_op, $rem_cnas, $rem_ent, $id_act, $id_benef, $li_op, $date_op, $id_lot, $id_prest, $id_prest, $id_pra, $id_pre,$adr_pre, $id_user,$dat_crea, $etat_op, $id_motif) ");

return $result;
}
}




function update_operation($id){
  $pdo =database_connection();
  $id = $GET['id_op'];
if (isset ($_POST["Submit"])){
  extract($_POST);
  $result = $pdo -> query("UPDATE `operation` SET id_op=$id_op, coef_op = $coef_op, fr_op= $fr_op, rem_cnas=$rem_cnas, rem_ent= $rem_ent, id_act=$id_act, id_benef=$id_benef, li_op=$li_op, date_op=$date_op, id_lot=$id_lot, id_prest=$id_prest, id_pra=$id_pra, id_pre=$id_pre, adr_pre=$adr_pre, id_user=$id_user, dat_crea=$dat_crea, etat_op=$etat_op, id_motif=$id_motif  WHERE id=$id_op)");

return $result;
}
}

function delete_operation($id){
  $pdo =database_connection();
  $id=$GET['id_op'];

if (isset ($_POST["Submit"])){
  extract($_POST);
  $result = $pdo -> query("DELETE `operation` WHERE id=$id")
}
}















  /*

function sigan_up(){

$pdo = database_connection();

extract($_POST);

$id_cmp;$login;$pass;$nom;$comptes;$sinistre;$id_adr;


$result = $pdo->query("INSERT INTO `account` (`id`,`name`,`password`) VALUES ('$id','$name','$password')")->fetchAll(PDO::FETCH_OBJ);

return $result;

}



function ajouter_task(){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $status=$_POST['status'];

    $pdo = database_connection();
  //  $result = $pdo->query("INSERT INTO `todo` (`id`,`name`,`status`) VALUES ('$id','$name','$status')")->fetchAll(PDO::FETCH_OBJ);

    
    $sql = $pdo ->prepare("INSERT INTO `todo` (`id`,`name`,`status`) VALUES (':id',':name',':status')");
    $sql ->bindValue (':id',$id );
    $sql ->bindValue (':name', $name );
    $sql ->bindValue (':status', $status );
    $result = $sql->execute();

  
    return $result;
}

function delete_task(){

    $id=$_POST['id'];
 
    $pdo = database_connection();
  //  $result = $pdo->query("INSERT INTO `todo` (`id`,`name`,`status`) VALUES ('$id','$name','$status')")->fetchAll(PDO::FETCH_OBJ);

    
    $result = $pdo ->query("DELETE * from `todo` WHERE id = $id ");
  

  
    return $result;
}


*/



?>