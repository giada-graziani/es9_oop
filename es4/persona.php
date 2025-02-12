<?php
    class Persona{
        protected $nome;
        protected $cognome;
       

        function __construct($nome,$cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
          }
    
        function set_nome($nome) {
            $this->nome = $nome;
        }
        
        function get_nome() {
        return $this->nome;
        }

        function set_cognome($cognome) {
            $this->cognome = $cognome;
        }
        
        function get_cognome() {
        return $this->cognome;
        }

        public function presentati();
    }

?>