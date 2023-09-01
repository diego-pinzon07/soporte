<?php 
    class Landing{
        public function __construct(){}
        public function olvido_pass(){
            require_once "views/business/header.view.php";
            require_once "views/company/olvido_pass.view.php";
            require_once "views/business/footer.view.php";
        }
    }
?>