<?php
    abstract class Animale{
        protected $nomed;
       

        function __construct($nome) {
            $this->nome = $nome;
          }
    
        function set_nome($nome) {
            $this->nome = $nome;
        }
        
        function get_nome() {
        return $this->nome;
        }

        abstract public function verso();
    }

    class Cane extends Animale{
        function __construct($nome) {
            parent::__construct($nome);
        }
        public function verso(){
            echo"io sono un cane e faccio bau bau!<br>";
        }
    }
?>