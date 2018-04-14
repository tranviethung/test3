<?php
session_start();
require_once '../model/index_model.php';
require_once '../libs/functions.php';
class IndexControllers {
    public $index_model;

    public function __construct() {
        $this->index_model = new IndexModel();

    }

    public function IndexUser() {
        $data = $this->index_model->index();
        require_once '../view/index.php';
    }

    public function DeleteAction($data) {
        $this->index_model->DeleteControllers($data);
        $data = $this->index_model->index();
        require_once '../view/index.php';
    }
    public function EditAction($data) {
        $data = $this->index_model->EditControllers($data);
        require_once '../view/edit.php';
    }
    public function SearchUserAction($search) {
//        var_dump($search['search']);die;
        $data = $this->index_model->searchByName($search['search']);
        require_once '../view/index.php';
    }
    public function listAction() {
       echo "hung";
    }
    public function ListUserAction() {
        $data = $this->index_model->index();
        require_once '../view/index.php';
    }
    public function AddNewAction() {
        require_once '../view/addnew.php';
    }
    public function CreateAction($data) {
        if (empty($_FILES['fileToUpload']['name'])) {
            $this->index_model->InsertUserModel($data);
            $data = $this->index_model->index();
            require_once '../view/index.php';
        }
        else {
            $upload = UploadImage( $_FILES);
            if ($upload ==1) {
                $this->index_model->InsertUser($data, $_FILES);
                $data = $this->index_model->index();
                require_once '../view/index.php';
            }
            else {
                echo "sai luon";
            }

        }

    }
    public function UpdateAction($data2) {
//        var_dump($data2['status']);die;
        $this->index_model->checkUser($data2['name']);
//
//        var_dump($_FILES);die;
//        var_dump($_FILES['file']['name']);die;
        if (empty($_FILES['fileToUpload']['name'])) {
            $this->index_model->UpdateUserModel($data2);
            $data = $this->index_model->index();
            require_once '../view/index.php';
        }
        else {
            $upload = UploadImage($_FILES);
            if ($upload ==1) {
                $this->index_model->UpdateUserModel2($data2, $_FILES);
                $data = $this->index_model->index();
                require_once '../view/index.php';
            }
            else {
                echo "sai luon";
            }

        }

    }


}

$admin = new IndexControllers();

if(isset($_REQUEST['action'])){
    $_SESSION['ctr_name'] = $admin->index_model;
    $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
}else{
    $action = 'index';
}

switch ($action){
    case 'index';
        $admin->IndexUser();
        break;
    case 'addnew';
        $admin->AddNewAction();
        break;
    case 'list';
        $admin->ListUserAction();
        break;
    case 'create';
        $admin->CreateAction($_REQUEST);
        break;
    case 'delete';
        $admin->DeleteAction($_REQUEST);
        break;
    case 'edit';
        $admin->EditAction($_REQUEST);
        break;
    case 'search';
        $admin->SearchUserAction($_REQUEST);
        break;
    case 'update';
        $admin->UpdateAction($_REQUEST);
        break;
    default ;
        $admin->listAction();
        break;
}

?>