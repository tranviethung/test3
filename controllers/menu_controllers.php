<?php
session_start();
require_once '../model/index_model.php';
require_once '../libs/functions.php';
class MenuControllers {
    public $index_model;

    public function __construct() {
        $this->index_model = new IndexModel();
        
    }

    public function IndexDesktop() {
        $data = $this->index_model->countUser();
        $data2 = $this->index_model->countTeam();
        require_once '../view/desktop.php';
    }

}

$admin = new MenuControllers();

if(isset($_REQUEST['action'])){
    $_SESSION['ctr_name'] = $admin->index_model;
    $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
}else{
    $action = 'index';
}

switch ($action){
    case 'index';
        $admin->IndexDesktop();
        break;

    default ;
        $admin->listAction();
        break;
}

?>