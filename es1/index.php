<?php
header("Content-Type: application/json");
require_once("alunno.php");
require_once("voto.php");
require_once("indirizzo.php");

$voto1=[];
array_push($voto1, new Voto(9,"matematica","ottimo"));

$voto2=[];
array_push($voto2, new Voto(0,"geografia","pessimo"));

$voto3=[];
array_push($voto3, new Voto(6,"italiano","sufficiente"));

$indirizzo1= new Indirizzo("via A", 1598,"112/2");
$indirizzo2= new Indirizzo("via B", 1548,"112");
$indirizzo3= new Indirizzo("via C",78,"12/2");

$alunni=[];
array_push($alunni, new Alunno("Franco","Sas",47, $voto1, $indirizzo1));
array_push($alunni, new Alunno("Gas","Gas",97, $voto2, $indirizzo2));
array_push($alunni, new Alunno("Gas2","Gas2",92,$voto3, $indirizzo3));

$alunniS=file_get_contents("alunni.json"); // oppure --> json_encode($alunni);

$alunni2= json_decode($alunniS,true);// true per deserializzarlo in un array associativo
echo $alunnni2;

$arrayS=[];
foreach($alunni2 as $alunno){
    $variabile1= new Alunno($alunno["name"], $alunno["surname"],$alunno["age"],"","");
    array_push($arrayS, $variabile1);
}
echo json_encode($arrayS);





/*foreach($alunni as $alunno){
    $alunno->stampa();
}
echo'[
    {"nome":"boss","cognome":"capo","eta":60},
    {"nome":"boss2","cognome":"capo2","eta":602}
    ]';
    */

?>