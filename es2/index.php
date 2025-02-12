<?php
require_once("automobile.php");
header("Content-Type: application/json");
$macchine=[];

array_push($macchine, new Automobile("suzuki", 2020,"sx34"));
array_push($macchine, new Automobile("fiat", 30978,"punto"));

echo json_encode($macchine);
/*foreach($macchine as $macchina){
    $macchina->stampa();
}*/

?>