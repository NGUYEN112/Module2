<?php

abstract class AbstractPatient {
    abstract public function enqueue($name,$code);
    abstract public function dequeue();
    abstract public function isEmpty();
}