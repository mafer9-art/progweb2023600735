<?php
class Persona {
    private $nombre;
    private $fecNac;
    private $Tel;

    public function __construct($nombre, $fecNac, $Tel) {
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->Tel = $Tel;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($value) {
        $this->nombre = $value;
    }

    public function getFecNac() {
        return $this->fecNac;
    }

    public function setFecNac($value) {
        $this->fecNac = $value;
    }

    public function getTel() {
        return $this->Tel;
    }

    public function setTel($value) {
        $this->Tel = $value;
    }
}
?>
