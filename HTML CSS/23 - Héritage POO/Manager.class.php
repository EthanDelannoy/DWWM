<?php
require_once "Employe.class.php";

class Manager extends Employe {
    protected $employesGeres;

    public function __construct($nom, $salaire, $employesGeres) {
        parent::__construct($nom, $salaire);
        $this->employesGeres = $employesGeres;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "*********************<br>";
        echo "$this->nom gère :<br>";
        foreach ($this->employesGeres as $employe) {
            echo "- $employe<br>";
        }
    }
}
?>