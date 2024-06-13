<?php
function check_login($con){
   if(isset( $_SESSION['user_id']))
   {
    $username=$_SESSION['username'];
    $query="select * from login_details where username = $username limit 1";
    $result=mysqli_query($con,$query);
    if($result && mysqli_num_rows($result)>0){
        $username=mysqli_fetch_assoc($result);
        return $username;
    }
   }
   header("Location:login.php");
   die;
}
?>