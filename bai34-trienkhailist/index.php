<?php

include "ArraysList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

print_r($listInteger->get(-1));