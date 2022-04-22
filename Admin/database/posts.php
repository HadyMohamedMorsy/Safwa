

<?php
    require_once('connect.php');


class Posts extends connection{
    private $id;
    private $catagort_id;
    private $user_id;
    private $Thumbnail;
    private $title_en;
    private $title_fr;
    private $title_ar;
    private $Description_EN;
    private $Description_AR;
    private $Description_Fr;
    private $created_on;
    private $Slug;


    public function setUserId($catagort_id)
    {
        $this->catagort_id = $catagort_id;
    }

    public function getcatagort_id()
    {
        return $this->catagort_id;
    }

    public function setuser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getuser_id()
    {
        return $this->user_id;
    }

    public function setuser_id($id)
    {
        $this->id = $id;
    }

    public function getid()
    {
        return $this->id;
    }

    public function setThumbnail($Thumbnail)
    {
        $this->Thumbnail = $Thumbnail;
    }

    public  function getThumbnail()
    {
        return $this->Thumbnail;
    }

    public function settitle_en($title_en)
    {
        $this->title_en = $title_en;
    }

    public function settitle_ar($title_ar)
    {
        $this->title_ar = $title_ar;
    }

    public function settitle_fr($title_fr)
    {
        $this->title_fr = $title_fr;
    }

    public function gettitle_en()
    {
        return $this->title_en;
    }

    public function gettitle_ar()
    {
        return $this->title_ar;
    }

    public function gettitle_fr()
    {
        return $this->title_en;
    }
    

    public function setDescription_EN($Description_EN)
    {
        $this->Description_EN = $Description_EN;
    }

    public function setDescription_ar($Description_AR)
    {
        $this->Description_AR = $Description_AR;
    }

    public function setDescription_fr($Description_Fr)
    {
        $this->Description_Fr = $Description_Fr;
    }

    public function getDescription_en()
    {
        return $this->Description_EN;
    }

    public function getDescription_ar()
    {
        return $this->Description_AR;
    }

    public function getDescription_fr()
    {
        return $this->Description_Fr;
    }


    public function setslug($Slug)
    {
        $this->Slug = $Slug;
    }

    public function getslug()
    {
        return $this->Slug;
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