<?php
//session_start();
//require_once '../model/index_model.php';
//
//class IndexControllers {
//    public $index_model;
//
//    public function __construct() {
//
//    }
//
//    public function IndexProducts() {
//        $data  = "hung";
//        return $data;
//        require_once '../view/index.php';
//    }
//    public function errAtion() {
//        echo "khong co du lieu";
//    }
//}
//$admin = new IndexControllers();
//
//if(isset($_REQUEST['action'])){
//    $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
//}else{
//    $action = 'index';
//}
//
//switch ($action){
//    case 'index';
//        $data = $admin->IndexProducts();
//        break;
//
//    default ;
//        $admin->errAtion();
//        break;
//}
//
//?>