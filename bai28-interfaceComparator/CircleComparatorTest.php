<?php
include "CircleComparator.php";

$circleOne = new CircleComparator('circleOne', 8);
$circleTwo = new CircleComparator('circleTwo', 2);

var_dump($circleOne->compare($circleTwo));