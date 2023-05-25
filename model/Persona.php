<?php
class Persona {
    private $nombre;
    protected $edad;

    public function _construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre(){
        $this->nombre = $nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setEdad(){
        $this->nombre = $nombre;
    }
    private function saludar(){
        echo "Hola mi nombre es ". $this->nombre;
    }
};
?>