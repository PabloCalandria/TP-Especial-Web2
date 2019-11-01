<?php
    require_once 'libs/Smarty.class.php';

    class ContactUsView{
        
        function mostrar(){
            $url=explode("/", $_GET["action"]);
            $smarty = new Smarty();
            $smarty->assign('Context', $url[0]);
            $smarty->assign('Login', isset($_SESSION));
            $smarty->assign('Admin', $_SESSION['ADMIN']);
            $smarty->display('templates/contactUs.tpl');
        }        
    }   
?>