<?php

    class securedController{

        function __construct(){

            session_start();
            if(isset($_SESSION["User"])){
                
            }else{
                header(LOGIN);
            }
        }
    }

?>