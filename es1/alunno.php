<?php
    class Alunno implements JsonSerializable{
        protected $name;
        protected $surname;
        protected $age;
  

//costruttore
    function __construct($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
      }

//get e set
    function set_name($name) {
        $this->name = $name;
    }
    
    function get_name() {
    return $this->name;
    }

    function set_surname($surname) {
        $this->surname = $surname;
    }
    
    function get_surname() {
    return $this->surname;
    }

    function set_age($age) {
        $this->age = $age;
    }
    
    function get_age() {
    return $this->age;
    }

    public function jsonSerialize(): array{
        return[
            "name" => $this->name,
            "surname" => $this->surname,
            "age" => $this->age
        ];
    }
    function stampa(){
        echo "{$this->name} {$this->surname} {$this->age}<br>";
    }

}

?>