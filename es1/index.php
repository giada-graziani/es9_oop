<?php
header("Content-Type: application/json");
require_once("alunno.php");

$alunni=[];
array_push($alunni, new Alunno("Franco","Sas",47));
array_push($alunni, new Alunno("Gas","Gas",97));
array_push($alunni, new Alunno("Gas2","Gas2",92));

echo json_encode($alunni);

/*foreach($alunni as $alunno){
    $alunno->stampa();
}
echo'[
    {"nome":"boss","cognome":"capo","eta":60},
    {"nome":"boss2","cognome":"capo2","eta":602}
    ]';
    */

?>