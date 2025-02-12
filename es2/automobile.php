<?php
require_once("veicolo.php");
class Automobile extends Veicolo implements JsonSerializable{
    private $modello;

    function __construct($marca, $anno, $modello) {
        parent::__construct($marca,$anno);
        $this->modello = $modello;
      }

    function set_modello($modello) {
        $this->modello = $modello;
    }
    
    function get_modello() {
    return $this->modello;
    }

    public function jsonSerialize(): array{
        return[
            "marca"=>$this->marca,
            "anno"=>$this->anno,
            "modello"=>$this->modello
        ];
    }
    /*function stampa(){
        echo "{$this->marca} {$this->anno} {$this->modello}<br>";
    }*/
}
?>