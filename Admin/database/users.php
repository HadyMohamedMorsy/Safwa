

<?php
    require_once('connect.php');


class users extends connection{

    private $user_id;
    private $user_name;
    private $user_email;
    private $user_password;
    private $user_profile;
    private $user_status;
    private $user_created_on;


    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    public function getUserName()
    {
        return $this->user_name;
    }
    public function setUserEmail($user_email)
    {
        $this->user_email = $user_email;
    }

    public  function getUserEmail()
    {
        return $this->user_email;
    }

    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;
    }

    public function getUserPassword()
    {
        return $this->user_password;
    }

    public function setUserProfile($user_profile)
    {
        $this->user_profile = $user_profile;
    }

    public function getUserProfile()
    {
        return $this->user_profile;
    }

    public function setUserStatus($user_status)
    {
        $this->user_status = $user_status;
    }

    public function getUserStatus()
    {
        return $this->user_status;
    }

    public function setUserCreatedOn($user_created_on)
    {
        $this->user_created_on = $user_created_on;
    }

    public function getUserCreatedOn()
    {
        return $this->user_created_on;
    }

    public function get_users($post_id = null){

        if($post_id != null){

            $sql = 'SELECT * FROM users WHERE User_id = "'.$this->user_id.'"';

        }else{

            $sql = 'SELECT * FROM users';

        }

        
        $result =  $this->runconnection()->query($sql);

        if($result->num_rows > 0){

            return $result; 

        }else{
            
            return false;
        }


    }

    public function Edit_user(){

        $sql = 'UPDATE users SET
            UserName = "'.$this->user_name.'",
            Password = "'.$this->user_password.'",
            Email = "'.$this->user_email.'",
            profile = "IMG-Defult-Male.jpg",
            status = "Active",
            created_on = "'.date('Y/m/d').'",
            Employer = "Admin",
            FirstName = "Hady",
            SecoundName = "Ahmed",
            type = "Female"
            WHERE User_id = "'.$this->user_id.'"
        ';

        $this->runconnection()->query($sql);
    }

    public function Delete_user(){

        $sql = 'DELETE FROM  users  WHERE User_id = "'.$this->user_id.'" ';

        $this->runconnection()->query($sql);
    }

    public function InsertUser(){

        $sql = 'INSERT INTO  users SET
            UserName = "'.$this->user_name.'",
            Password = "'.$this->user_password.'",
            Email = "'.$this->user_email.'",
            profile = "IMG-Defult-Male.jpg",
            status = "Active",
            created_on = "'.date('Y/m/d').'",
            Employer = "Admin",
            FirstName = "Hady",
            SecoundName = "Ahmed",
            type = "Female"
            
        ';
        
        $this->runconnection()->query($sql);
    }


}


?>