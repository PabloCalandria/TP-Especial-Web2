<?php
    require_once 'libs/Smarty.class.php';

    class ContactUsView{
        
        function mostrar(){
            $smarty = new Smarty();
            $smarty->assign('Login', isset($_SESSION));
            $smarty->display('templates/contactUs.tpl');
        }        
    }   
?>