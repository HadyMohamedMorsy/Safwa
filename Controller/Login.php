<?php
// $Connection
include('Config.php');

$Message = array(); // for errors message

if (isset($_POST['submit'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if (!isset($_POST["Username"])) {
            $Message[] = 'write the user name';
        }
        if (!isset($_POST["Password"])) {
            $Message[] = 'write the password';
        }
        if (empty($_POST["Username"])) {
            $Message[] = 'username must be not empty';
        }
        if (empty($_POST["Password"])) {
            $Message[] = 'password must be not empty';
        }
    }
    if (empty($Message)) {
        $sql = 'SELECT * FROM users WHERE UserName = "'.$_POST["Username"].'" AND Password = "'.md5(sha1($_POST["Password"])).'" ';
        $result = mysqli_query($Connection,$sql);
        $row  = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count  = mysqli_num_rows($result);
        if ($count > 0) {
            if ($row['status'] !== 'Active') {
                $Message[] = 'sorry, user is not active so cant login now';
            }
        }else {
            $Message[] = 'the password or username is wrong';
        }
    }
    if (empty($Message)) {
            $_SESSION['U_ID']           = $row['User_id'];
            $_SESSION['U_UserName']     = $row['UserName'];
            $_SESSION['U_Email']        = $row['Email'];
            $_SESSION['U_status']       = $row['status'];
            $_SESSION['U_created_on']   = $row['created_on'];
            $_SESSION['U_FirstName']    = $row['FirstName'];
            $_SESSION['U_SecoundName']  = $row['SecoundName'];
            $_SESSION['U_Type']         = $row['type'];
            // Manual SESSION
            $_SESSION['U_FullName']     = $row['FirstName'] . ' ' . $row['SecoundName'];

            if ($row['type'] == 'Employer') {
                header('location: /Admin');
            }
    }
}
?>