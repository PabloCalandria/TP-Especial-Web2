<?php

    class securedController{

        function __construct(){

            if(isset($_SESSION["ID_USER"])){
                session_start();
            }else{
                header(LOGIN);
            }
        }

        function logout(){
            session_start();
            session_destroy();
            header(LOGIN);
        }
    }

?>