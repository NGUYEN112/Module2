<?php

include_once('ArrayList.php');
$arraylist = new ArrayList;
$arraylist->add(1);
$arraylist->add(2);
$arraylist->add(3);
$arraylist->add(4);
echo print_r($arraylist).'<br/>';
echo print_r($arraylist->firstArr()).'<br/>';
$arraylist->clear();
echo print_r($arraylist).'<br/>';
$arraylist->reset();
print_r($arraylist);
