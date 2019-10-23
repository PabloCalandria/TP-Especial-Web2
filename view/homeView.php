<?php
    require_once 'libs/Smarty.class.php';

    class HomeView {
    
        function mostrar(){   
            $smarty = new Smarty();      
            $smarty->display('templates/home.tpl');           
        }
    }
?>
