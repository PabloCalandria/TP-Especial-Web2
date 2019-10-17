<?php
    require_once 'libs/Smarty.class.php';
    class ContactUsView{
        function Mostrar(){
            $smarty = new Smarty(); 
            $smarty->display('templates/contactUs.tpl');
        }        
    }
    
?>