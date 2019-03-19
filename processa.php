<?php
         $maior=0;
         
         $vetor= array();
         
         $vetor[0]= $_POST["valor1"];
         $vetor[1]= $_POST["valor2"];
         $vetor[2]= $_POST["valor3"];
         $vetor[3]= $_POST["valor4"];
         $vetor[4]= $_POST["valor5"];
         
         for ($i=0;$i<=4;$i++){
             if($maior<$vetor[$i]){
                 $maior=$vetor[$i];
             }
                 
         }
         
         echo "O maior número é: ".$maior. "<br><br>";
 
         echo "Os números pares são: ";
         for ($i=0;$i<=4;$i++){
             if ($vetor[$i] % 2 == 0){
                     echo "<br>";
                     echo $vetor[$i];         
             }        
         }
         
         echo "<pre>";
            print_r($vetor);
         echo "</pre>";
         
        ?>
