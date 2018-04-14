<?php
include '../model/index_model.php';
class Ajax extends IndexModel{
    function getAjax(){
        $text = $_GET['text'];
        $query = "SELECT id FROM users WHERE  email = '".$_GET['text']."'";

        $result = $this->executeQuery($query);
        $count_text = 0;
        if(count($result) > 0){
            $count_text = count($result);

        }
        echo $count_text;
    }

}

$a= new Ajax;
$a->getAjax();
//
//
//
//
//    json_encode($text);
//echo $text;