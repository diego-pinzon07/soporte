<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        public function registrarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/business/header.view.php";
                require_once "views/company/registrarme.view.php";
                require_once "views/business/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User(
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail'],
                    $_POST['userPass'],
                    $_POST['userStatus']
                );
                $user->registrarUsuario();
                header("Location: ?c=Login");
            }            
        }

        public function registrarUsuarios2(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/company/registrarme2.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User(
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail'],
                    $_POST['userPass'],
                    $_POST['userStatus']
                );
                $user->registrarUsuario2();
                // header("Location: ?c=Users&a=registrarUsuarios2");
                header("Location: ?c=Users&a=consultarUsuarios");
            }            
        }

        public function consultarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/roles/admin/header.view.php";
                require_once "views/company/consultar_users.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }
        public function actualizarUsuarios() {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $user = new User;
                $user = $user->obtenerUserPorId($_GET['codigoUser']);
                require_once "views/roles/admin/header.view.php";
                require_once "views/company/update_users.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User(                    
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail'],
                    $_POST['userPass'],
                    $_POST['userStatus']
                );                
                print_r($user);
                $user->actualizarUsuario();
                header("Location: ?c=Users&a=consultarUsuarios");
            }
        }
        public function eliminarUsuarios() {
            $user = new User;            
            $user->eliminarUsuario($_GET['codigoUser']);
            header("Location: ?c=Users&a=consultarUsuarios");
        }
    }
?>