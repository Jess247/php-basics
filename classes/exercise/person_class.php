<?php
class Person {
    // attributes
    protected $vorname;
    protected $nachname;

    // constructor
    public function __construct($nName, $vName) {
        $this->vorname = $vName;
        $this->nachname = $nName;
    }

    function setVorname($vName) {
        $this->vorname = $vName;
    }

    function getVorname() {
       return $this->vorname;
    }

    function setName($nName) {
         $this->nachname = $nName;
    }

    function getName() {
        return $this->nachname;
    }

}
?>