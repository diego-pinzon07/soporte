<?php session_start();
    require_once "models/Rol.php";
    class Roles{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        // Crear Rol
        public function registrarRoles(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    require_once "views/roles/admin/header.view.php";
                    require_once "views/company/crear_rol.view.php";
                    require_once "views/roles/admin/footer.view.php";
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $rol = new Rol(
                        null,
                        $_POST['rol']
                    );                
                    $rol->registrarRol();
                    header("Location: ?c=Roles&a=consultarRoles");
                }                
            } else {                
                header("Location: ?c=Dashboard");
            }
            
        }
        // Consultar Roles
        public function consultarRoles(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    $roles = new Rol;
                    $roles = $roles->consultarRoles();               
                    require_once "views/roles/admin/header.view.php";
                    require_once "views/company/consultar_rol.view.php";
                    require_once "views/roles/admin/footer.view.php";
                }
            } else {                
                header("Location: ?c=Dashboard");
            }            
        }
        // Actualizar Rol
        public function actualizarRoles(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    $rol = new Rol;
                    $rol = $rol->obtenerRolPorId($_GET['codigoRol']);
                    require_once "views/roles/admin/header.view.php";
                    require_once "views/company/actualizar_rol.view.php";
                    require_once "views/roles/admin/footer.view.php";                
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $rol = new Rol(
                        $_POST['codigoRol'],
                        $_POST['nombreRol']
                    );                
                    $rol->actualizarRol();
                    header("Location: ?c=Roles&a=consultarRoles");
                }
            } else {                
                header("Location: ?c=Dashboard");
            }            
        }
        // Eliminar Rol
        public function eliminarRoles(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                $rol = new Rol;
                $rol->eliminarRol($_GET['codigoRol']);
                header("Location: ?c=Roles&a=consultarRoles");
            } else {                
                header("Location: ?c=Dashboard");
            }
        }
    }

?>