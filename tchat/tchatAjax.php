<?php
include "../connexion.php";
include "tchat.php";
include "../user/Users.php";

session_start();

$d = array();
$d["erreur"] = "toto";
extract ($_POST);
if ($_POST){
if ($_POST["action"] == "addMessage"){

	$d["test"] = insert_message($_SESSION["id"],$message);
	$d["erreur"] = "ok";
}

if ($_POST["action"] == "getMessage"){
	$insertmsg = "SELECT * FROM tchat WHERE id_message > $lastid ORDER BY id_message ASC";
	$res = pg_query($dbconnect, $insertmsg);
	$d["result"] = "";
	$d["lastid"] = $lastid;
	while (($msg = pg_fetch_row($res))){
		$d["result"] .= '<b>'.get_pseudo_user($msg[1]).':'.$msg[2].'</b><br />';
		$d["lastid"] = $msg[0];
	}
	$d["erreur"] = "ok";
}
echo json_encode($d);
}
?>