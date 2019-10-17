<?php

    require_once 'libs/Smarty.class.php';

    class homeView {
    
        function Mostrar(){
            
            //Realizar un assign por cada variable usada en el templates 

            $smarty = new Smarty(); 

        //    $smarty->debugging = true;  Abre una ventana mostrando toda la informacion
            
            $smarty->display('templates/home.tpl');           
        }
    }
?>
