<?php

require_once "./entitites/Paypal/Paiement.class.php";
require_once "./entitites/Stripe/Paiement.class.php";

use \entities\Paypal\Paiement as PaypalPaiement;
use \entities\Paypal\Paiement;

$paiementPaypal = new PaypalPaiement;
$paiementStripe = new Paiement();


var_dump($paiementPaypal) . "<br>";
var_dump($paiementStripe) . "<br>";