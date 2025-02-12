<?php
require_once("animale.php");

$animali=[];
array_push($animali, new Cane("Denver"), new Cane("polpetta"));


foreach($animali as $animale){
    $animale->verso();
}

?>