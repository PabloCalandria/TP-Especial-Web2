<?php
<<<<<<< HEAD

require_once "./view/contactUsView.php";

=======
require_once "./view/contactUsView.php";
>>>>>>> d296844b46de7863f0c076684527a797f744888d
class contactUsController{
    private $view;
    function __construct(){
        $this->view = new ContactUsView();
    }
    function ContactUsView(){
        $this->view->Mostrar();
    }
}
?>