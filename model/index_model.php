<?php
    require_once '../model/model.php';

class IndexModel extends DB
{
    public function index()
    {
        $query = 'SELECT `id` ,`name` ,`email`,`phone_number`,`status` FROM users ';
        $result = $this->executeQuery($query);
        return $result;
    }
    public function countUser()
    {
        $query = 'SELECT * FROM users ';
        $result = $this->executeQuery($query);
        $count = count($result);
        return $count;
    }
    public function countTeam()
    {
        $query = 'SELECT * FROM teams ';
        $result = $this->executeQuery($query);
        $count = count($result);
        return $count;
    }
    public function DeleteControllers($id)
    {

        $query = 'Delete From users where id='.$id['id'].'';
        $result = $this->deleteQuery($query);
        return $result;
    }

    public function checkUser($id)
    {
        $query = 'Delete From users where id='.$id['id'].'';
        $result = $this->deleteQuery($query);
        return $result;
    }
    public function searchByName($name)
    {
//        var_dump($name);die;
        $query = 'SELECT `id` ,`name` ,`email`,`phone_number`,`status` FROM users WHERE name LIKE "%'.$name.'%"';
        $result = $this->executeQuery($query);
//        var_dump($result);die;
        return $result;
    }
    public function EditControllers($id)
    {
//        var_dump($id['id']);die;
        $query = 'SELECT * FROM users where id = '.$id['id'].'';
        $result = $this->executeQuery($query);
//        var_dump($result);die;
        return $result;
    }
    public function UpdateUserModel($id)
    {
//        var_dump($id['name']);die;
        $query = 'UPDATE users set name = "'.$id['name'].'" , email = "'.$id['email'].'" , gender = "'.$id['gender'].'" , date_of_birth = "'.$id['date_of_birth'].'", phone_number = "'.$id['phone_number'].'", current_address = "'.$id['current_address'].'" , leave_days = "'.$id['leave_days'].'", team_id = "'.$id['team_id'].'", status = "'.$id['status'].'", language_skills = "'.$id['language_skills'].'", hobby = "'.$id['hobby'].'",salary = "'.$id['salary'].'" where id='.$id['id'].'';
        $result = $this->updateQuery($query);
        return $result;
    }

    public function UpdateUserModel2($id,$data)
    {
//        var_dump($data['fileToUpload']['name']);die;
//        var_dump($id['name']);die;
        $query = 'UPDATE users set image = "'.$data['fileToUpload']['name'].'", name = "'.$id['name'].'" , email = "'.$id['email'].'" , gender = "'.$id['gender'].'" , date_of_birth = "'.$id['date_of_birth'].'", phone_number = "'.$id['phone_number'].'", current_address = "'.$id['current_address'].'" , leave_days = "'.$id['leave_days'].'", team_id = "'.$id['team_id'].'", status = "'.$id['status'].'", language_skills = "'.$id['language_skills'].'", hobby = "'.$id['hobby'].'",salary = "'.$id['salary'].'" where id='.$id['id'].'';
        $result = $this->updateQuery($query);
        var_dump($query);die;
        return $result;
    }
    public function insertUserModel($data){
//        var_dump($data);die;
            $query = 'INSERT INTO `users`(`name`, `email`, `password`,`email_personal`, `gender`, `date_of_birth`, `phone_number`, `current_address`, `leave_days`,`team_id`,`status`,`language_skills`,`hobby`,`salary`)
                   VALUE ("' . $data["name"] . '", "' . $data["email"] . '","' . sha1($data["password"]) . '", "' . $data["email_personal"] . '", "' . $data["gender"] . '", "' . $data["date_of_birth"] . '", "' . $data["phone_number"] . '", "' . $data["current_address"] . '", "' . $data["leave_days"] . '", "' . $data["team_id"] . '", "' . $data["status"] . '", "' . $data["language_skills"] . '", "' . $data["hobby"] . '", "' . $data["salary"] . '")';
            $result = $this->insertNew($query);
            return $result;
    }
    public function insertUser($data, $a){

//        var_dump($a['fileToUpload']['name']);die;
        $query = 'INSERT INTO `users`(`name`, `email`, `password`,`email_personal`,`image`, `gender`, `date_of_birth`, `phone_number`, `current_address`, `leave_days`,`team_id`,`status`,`language_skills`,`hobby`,`salary`)
                   VALUE ("' . $data["name"] . '", "' . $data["email"] . '","' . sha1($data["password"]) . '", "' . $data["email_personal"] . '","' . $a['fileToUpload']['name'] . '", "' . $data["gender"] . '", "' . $data["date_of_birth"] . '", "' . $data["phone_number"] . '", "' . $data["current_address"] . '", "' . $data["leave_days"] . '", "' . $data["team_id"] . '", "' . $data["status"] . '", "' . $data["language_skills"] . '", "' . $data["hobby"] . '", "' . $data["salary"] . '")';
        var_dump($query);die;
        $result = $this->insertNew($query);

        return $result;
    }
}
?>
