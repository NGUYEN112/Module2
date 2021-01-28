<form method="post">
<input name="a" type="number"><b>x^2 + </b>
<input name="b" type="number"><b>x + </b>
<input name="c" type="number"><b> = 0 </b>
<input type="submit" value="Cal">
</form>
<?php 
include("quadratic_equation.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $qe = new quadraticEquation($_POST['a'],$_POST['b'],$_POST['c']);
    echo $qe->getRoot() ;
}
?>