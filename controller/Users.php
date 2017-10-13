<?php
require_once './model/User.php';

class UsersController {
    private static $instance;
    
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {

    }
    
    public function index(){
   
        AppController::allowed('usuario_index');  

        $args = [];

        if (isset($_GET['active'])) {
            $args['active'] = $_GET['active'];
        }

        if (isset($_GET['search']) && $_GET['search'] != "") {
            $args['search'] = $_GET['search'];
        }

        if ($users = User::all($args)) {

            /*
            require_once 'view/users/header.html';
            require_once 'view/navbar.php';
            require_once 'view/users/index.php';
            require_once 'view/footer.html';
            */

            $context = [];
            
            $context['stylesheets'] = ['/public/css/users.css'];
            $context['javascripts'] = ['/public/js/users.js'];
            $context['pagename'] = 'Usuarios';
            $context['users'] = $users;
            $context['allRoles'] = Rol::all();
            $context['usersCant'] = count($users);

            $path = '/users/view.html.twig';
            
            TwigController::renderTwig($path, $context);
            die;
        }
        else {
            echo "Error";
            die;
        }
    }

    public function togglestate() {

        AppController::allowed('usuario_update');  

        User::id($_GET['id'])->togglestate();
        if ($_GET['id'] == AppController::getUser()->id) {
            LoginController::getInstance()->logout();
        }
        $this->index();
    }

    public function newUser() {

        AppController::allowed('usuario_new');  
        
        if ((!isset($_POST['email']) || ($email = trim($_POST['email'])) == "")
            || (!isset($_POST['user']) || ($user = trim($_POST['user'])) == "")
            || (!isset($_POST['pass']) || ($pass = trim($_POST['pass'])) == "")
            || (!isset($_POST['first_name']) || ($first_name =trim($_POST['first_name'])) == "")
            || (!isset($_POST['last_name'])) || ($last_name = trim($_POST['last_name'])) == "")
        {
            echo 'No llenaste bien los campos';
            die;
        }
        User::newUser($email, $user, $pass, $first_name, $last_name);
        $this->index();
    }

    public function deleteuser() {

        AppController::allowed('usuario_delete');  

        $id = $_POST['deleteModalId'];
        User::deleteUser($id);
        $this->index();
    }

    public function updateRol() {

        AppController::allowed('usuario_update');  

        if (!isset($_POST['rolesModalId']) || ($id = trim($_POST['rolesModalId'])) == "") {
            echo 'El campo id no esta cargado.';
            die;
        }

        $roles = Rol::all();
        $user = User::id($id);

        foreach ($roles as $rol) {
            if (isset($_POST[$rol->nombre]) && !$user->hasRol($rol)) {
                $user->addRol($rol->id);
            }
            elseif (!isset($_POST[$rol->nombre]) && $user->hasRol($rol)) {
                $user->deleteRol($rol->id);
            }
        }
        $this->index();
    }

    public function updateUser() {
       
        AppController::allowed('usuario_update');  

        if ((!isset($_POST['email']) || ($email = trim($_POST['email'])) == "")
            || (!isset($_POST['user']) || ($username = trim($_POST['user'])) == "")
            || (!isset($_POST['id']) || ($id = trim($_POST['id'])) == "")
            || (!isset($_POST['first_name']) || ($first_name =trim($_POST['first_name'])) == "")
            || (!isset($_POST['last_name'])) || ($last_name = trim($_POST['last_name'])) == "")
        {
            echo 'No llenaste bien los campos';
            die;
        }

        $user = User::id($id);

        $user->updateUser($email, $username, $first_name, $last_name);

        if (isset($_POST['pass']) && ($pass = trim($_POST['pass'])) != "") {
            $user->updatePass($pass);
        }

        $this->index();
    }

}