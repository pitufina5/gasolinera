<?php
require_once ("Surtidor.php");

class SurtidorGasoil extends Surtidor {
    var $premium;

    function __construct ($precio,$premium) {
        parent::__construct ($precio);
        $this->premium = $premium;
    }

    function setOctanaje ($octanaje) {
        $this->premium = $premium;
    }

    function getOctanaje () {
        return $this->premium;
    }
}