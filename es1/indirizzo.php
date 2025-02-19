<?php
    class Indirizzo implements JsonSerializable{
        protected $indirizzo;
        protected $cap;
        protected $civico;
  

//costruttore
    function __construct($indirizzo, $cap, $civico) {
        $this->indirizzo = $indirizzo;
        $this->cap = $cap;
        $this->civico = $civico;
      }

//get e set
    function set_indirizzo($indirizzo) {
        $this->indirizzo = $indirizzo;
    }
    
    function get_indirizzo() {
    return $this->indirizzo;
    }

    function set_cap($cap) {
        $this->cap = $cap;
    }
    
    function get_cap() {
    return $this->cap;
    }

    function set_civico($civico) {
        $this->civico = $civico;
    }
    
    function get_civico() {
    return $this->civico;
    }

    public function jsonSerialize(): array{
        return[
            "indirizzo" => $this->indirizzo,
            "cap" => $this->cap,
            "civico" => $this->civico
        ];
    }

    function stampaI(){
        echo "{$this->indirizzo} {$this->cap} {$this->civico}<br>";
    }

}

?>
