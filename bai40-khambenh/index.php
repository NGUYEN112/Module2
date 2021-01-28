<?php
include_once ('Patient.php');

$patient = new Patient();
$patient->enqueue('Smith',5);
echo var_dump($patient); 