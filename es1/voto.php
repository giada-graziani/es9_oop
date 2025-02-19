<?php
    class Voto implements JsonSerializable{
        protected $voto;
        protected $materia;
        protected $giudizio;
  

//costruttore
    function __construct($voto, $materia, $giudizio) {
        $this->voto = $voto;
        $this->materia = $materia;
        $this->giudizio = $giudizio;
      }

//get e set
    function set_voto($voto) {
        $this->voto = $voto;
    }
    
    function get_voto() {
    return $this->voto;
    }

    function set_materia($materia) {
        $this->materia = $materia;
    }
    
    function get_materia() {
    return $this->materia;
    }

    function set_giudizio($giudizio) {
        $this->giudizio = $giudizio;
    }
    
    function get_giudizio() {
    return $this->giudizio;
    }

    public function jsonSerialize(): array{
        return[
            "voto" => $this->voto,
            "materia" => $this->materia,
            "giudizio" => $this->giudizio
        ];
    }

    function stampaV(){
        echo "{$this->voto} {$this->materia} {$this->giudizio}<br>";
    }

}

?>