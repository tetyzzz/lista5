
<?php
echo "<pre>";
print_r($_POST);
$ope = $_POST["operaçao"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$resul = 0;
if ($ope == "+" ){
    
    $resul = $n1 + $n2;
    echo " <br> O resultado é: $resul";
    
} elseif ($ope == "-") {
    
    $resul = $n1 - $n2;
    echo " <br> O resultado é: $resul";
    
} elseif ($ope == "/") {
      
    $resul = $n1 / $n2;
    echo " <br> O resultado é: $resul";
} else {
         
    $resul = $n1 * $n2;
    echo " <br> O resultado é: $resul";
}
