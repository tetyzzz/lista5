<?php
        
        print_r ($_POST);

       $resul=0; 
               $v1= $_POST ["valor1"];
               $v2= $_POST ["valor2"];
        
        $resul= $v1 + $v2;
        
        echo "O resultado da soma é:". $resul;
        
        ?>
