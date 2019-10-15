<?php

    require('libs/Smarty.class.php');

    class homeView{

        function __construct(){

        }
    
        function Mostrar(){
            
            //Realizar un assign por cada variable usada en el templates 

            $smarty = new Smarty(); 

        //    $smarty->debugging = true;  Abre una ventana mostrando toda la informacion
            $smarty->assign('BASE_URL',BASE_URL);
            $smarty->display('templates/home.tpl');           
        }

    }
?>
