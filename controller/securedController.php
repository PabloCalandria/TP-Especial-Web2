<?php

    class securedController{

        function __construct(){
            
            if(isset($_SESSION["User"])){
                session_start();
                
            }else{
                header(LOGIN);
            }
        }
    }

?>