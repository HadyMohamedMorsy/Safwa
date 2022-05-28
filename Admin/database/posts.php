

<?php
    require_once('connect.php');


class Posts extends connection{
    public $id;
    public $catagort_id;
    public $user_id;
    public $Thumbnail;
    public $title_en;
    public $title_fr;
    public $title_ar;
    public $Description_EN;
    public $Description_AR;
    public $Description_Fr;
    public $created_on;
    public $Slug;

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setcatagortId($catagort_id)
    {
        $this->catagort_id = $catagort_id;
    }

    public function setuser_id($user_id)
    {
        $this->User_id = $user_id;
    }


    public function setThumbnail($Thumbnail)
    {
        $this->Thumbnail = $Thumbnail;
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


    public function setslug($Slug)
    {
        $this->Slug = $Slug;
    }


    public function get_post($post_id = null , $table){

        if($post_id != null){

            $sql = 'SELECT * FROM '.$table.' WHERE id = "'.$this->id.'"';

        }else{

            $sql = 'SELECT * FROM '.$table.' ';

        }

        
        $result =  $this->runconnection()->query($sql);

        if($result->num_rows > 0){

            return $result; 

        }else{
            
            return false;
        }


    }

    public function Edit_post($table){

        $sql = 'UPDATE '.$table.' SET
            Catagory_id = "'.$this->catagort_id.'",
            User_id = "'.$this->User_id.'",
            Thumbnail = ".IMG-Defult-Male.jpg",
            title_en = "'.$this->title_en.'",
            title_ar = "'.$this->title_ar.'",
            title_fr = "'.$this->title_fr.'",
            Description_EN = "'.$this->Description_EN.'",
            Description_AR = "'.$this->Description_AR.'",
            Description_Fr = "'.$this->Description_Fr.'",
            Created_on = "'.date('Y/m/d').'",
            Slug = "slug"
            WHERE id = "'.$this->id.'"
        ';

        $this->runconnection()->query($sql);
    }

    public function Insertposts($table){

        $sql = 'INSERT INTO  '.$table.' SET
            Catagory_id = "'.$this->catagort_id.'",
            User_id = "'.$this->User_id.'",
            Thumbnail = ".IMG-Defult-Male.jpg",
            title_en = "'.$this->title_en.'",
            title_ar = "'.$this->title_ar.'",
            title_fr = "'.$this->title_fr.'",
            Description_EN = "'.$this->Description_EN.'",
            Description_AR = "'.$this->Description_AR.'",
            Description_Fr = "'.$this->Description_Fr.'",
            Created_on = "'.date('Y/m/d').'",
            Slug = "slug"
        ';
        
        $this->runconnection()->query($sql);
    }

    public function Deleteposts($table){

        $sql = 'DELETE * FROM '.$table.' WHERE id = "'.$this->id.'"';

        $this->runconnection()->query($sql);
    }
}


?>