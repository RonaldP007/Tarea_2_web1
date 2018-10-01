<?php
if (($gestor = fopen("products.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $numero = count($datos);
        $contador = 0;
        $titulos =5;
        for ($c=0; $c < $numero; $c++) {
            echo $datos[$c];
            if($contador >4){
                echo "\n \n";
                $contador =0;
            }else{
                echo "    ";
                $contador++;
            }
        }
    }
    fclose($gestor);
}
?>