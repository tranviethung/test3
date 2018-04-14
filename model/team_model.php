<?php
    require_once '../model/model.php';

class TeamModel extends DB
{
    public function ListTeam()
    {
        $query = 'SELECT * FROM teams ';
        $result = $this->executeQuery($query);
        return $result;
    }
//    public function DeleteControllers($id)
//    {
//
//        $query = 'Delete From users where id='.$id['id'].'';
//        $result = $this->deleteQuery($query);
//        return $result;
//    }
//
    public function DeleteUser($id)
    {
//        var_dump($id);die;
        $query = 'Delete From users where id='.$id['id'].'';
//        var_dump($query);die;
        $result = $this->deleteQuery($query);
        return $result;
    }
    public function ShowUserByTeamId($id)
    {   $query = 'SELECT `id` ,`name` ,`email`,`phone_number`,`status` FROM users where `team_id` = '.$id;
        $result = $this->executeQuery($query);
        return $result;
    }
    public function EditUserById($id)
    {
//        var_dump($id['id']);die;
        $query = 'SELECT * FROM users where id = '.$id['id'].'';
        $result = $this->executeQuery($query);
//        var_dump($result);die;
        return $result;
    }
//    public function EditControllers($id)
//    {
////        var_dump($id['id']);die;
//        $query = 'SELECT * FROM users where id = '.$id['id'].'';
//        $result = $this->executeQuery($query);
////        var_dump($result);die;
//        return $result;
//    }
    public function UpdateTeam($id,$file)
    {

////        var_dump($file['fileToUpload']['name']);die;
//        var_dump($id);die;
        $query = 'INSERT INTO `teams`(`name`, `logo`, `description`)
                   VALUE ("' . $id["name-team"] . '", "' . $file['fileToUpload']['name'] . '", "' . $id["description"] . '")';
//        var_dump($query);die;
        $result = $this->insertNew($query);
        return $result;
    }
    public function UpdateModel($id)
    {
//        var_dump($id);die;
//        var_dump($id['id']);die;
        $query = 'UPDATE users set name = "'.$id['name'].'" , email = "'.$id['email'].'" , gender = "'.$id['gender'].'" , date_of_birth = "'.$id['date_of_birth'].'", phone_number = "'.$id['phone_number'].'", current_address = "'.$id['current_address'].'" , leave_days = "'.$id['leave_days'].'", team_id = "'.$id['team_id'].'", status = "'.$id['status'].'", language_skills = "'.$id['language_skills'].'", hobby = "'.$id['hobby'].'",salary = "'.$id['salary'].'" where id='.$id['id'].'';
        $result = $this->updateQuery($query);
//        var_dump($query);die;
        return $result;
    }
//
    public function UpdateModel2($id,$data)
    {
//        var_dump($data['fileToUpload']['name']);die;
//        var_dump($id['name']);die;
        $query = 'UPDATE users set image = "'.$data['fileToUpload']['name'].'", name = "'.$id['name'].'" , email = "'.$id['email'].'" , gender = "'.$id['gender'].'" , date_of_birth = "'.$id['date_of_birth'].'", phone_number = "'.$id['phone_number'].'", current_address = "'.$id['current_address'].'" , leave_days = "'.$id['leave_days'].'", team_id = "'.$id['team_id'].'", status = "'.$id['status'].'", language_skills = "'.$id['language_skills'].'", hobby = "'.$id['hobby'].'",salary = "'.$id['salary'].'" where id='.$id['id'].'';
        $result = $this->updateQuery($query);
        return $result;
    }
//    public function insertNewUser($data){
////            var_dump($data['email']);die;
//            $query = 'INSERT INTO `users`(`name`, `email`, `password`,`email_personal`, `gender`, `date_of_birth`, `phone_number`, `current_address`, `leave_days`,`team_id`,`status`,`language_skills`,`hobby`,`salary`)
//                   VALUE ("' . $data["name"] . '", "' . $data["email"] . '","' . sha1($data["password"]) . '", "' . $data["email_personal"] . '", "' . $data["gender"] . '", "' . $data["date_of_birth"] . '", "' . $data["phone_number"] . '", "' . $data["current_address"] . '", "' . $data["leave_days"] . '", "' . $data["team_id"] . '", "' . $data["status"] . '", "' . $data["language_skills"] . '", "' . $data["hobby"] . '", "' . $data["salary"] . '")';
////            var_dump($query);die;
//            $result = $this->insertNew($query);
//            return $result;
//    }
}
?>
