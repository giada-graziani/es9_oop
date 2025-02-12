<?php
    class Veicolo{
        protected $marca;
        protected $anno;

//costruttore
    function __construct($marca, $anno) {
        $this->marca = $marca;
        $this->anno = $anno;
      }

//get e set
    function set_marca($marca) {
        $this->marca = $marca;
    }
    
    function get_marca() {
    return $this->marca;
    }

    function set_anno($anno) {
        $this->anno = $anno;
    }
    
    function get_anno() {
    return $this->anno;
    }

}
?>