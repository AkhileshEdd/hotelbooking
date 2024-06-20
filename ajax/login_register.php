<?php 

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

if(isset($_POST['register']))
{
    $data = filteration($_POST);
    
    //match password

    if($data['pass'] != $data['cpass']){
        echo "pass_mismatch";
        exit;
    }

    //check if user exists

    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum` = ? LIMIT 1" , [$data['email'], $data['phonenum']],"ss");

    if(mysqli_num_rows($u_exist) != 0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    //upload user image to server
    
    $img = uploadUserImage($_FILES['profile']);
}

date_default_timezone_set("Asia/Kolkata");

// function sendMail(){
    
// }

if(isset($_POST['register'])){
    $data = filteration($_POST);
    // pass and cpass
    if($data['pass'] != $data['cpass']){
        echo 'pass_mismatch';
        exit;
    }
    //check user exists or not
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1",[$data['email'],$data['phonenum']],'ss');

    if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email']==$data['email']) ? 'email_already' : 'phone_already';
        exit;
    }
//    upload user image to server
    uploadUserImage($_FILES['profile']);
    if($img == 'inv_img'){
        echo 'inv_img';
        exit;
    }
    else if($img == 'upd_failed'){
        echo 'upload_failed';
        exit;
    }

    $token = bin2hex(random_bytes(16));

    $enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT);

    $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, 
    `dob`, `profile`, `password`, `token`) VALUES (?,?,?,?,?,?,?,?,?)";

    $values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['pincode'],
    $data['dob'],$img,$enc_pass,$token];

    if(insert($query, $values, 'sssssssss')){
        echo 'upd_failed';
        exit;
    }
    
    // send confirmation link to user  ,`profile` ,? s $img,

    $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`,`password`) 
    VALUES (?,?,?,?,?,?,?)";
    $values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['pincode'],$data['dob'],$data['pass']];
    if(insert($query,$values,'sssssss')){
        echo 1;
    }
    else{
        echo 'ins_failed';
    }
<<<<<<< HEAD
=======
       
}

// if($u_fetch['is_verified']==0){
//     echo 'not_verified';
// }

// if(!password_verify($data['pass'],$u_fetch['password']))

if(isset($_POST['login'])){
    $data = filtration($_POST);
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1",[$data['email_mob'],$data['email_mob']],"ss");
    if(mysqli_num_rows($u_exist)==0){
        echo 'inv_email_mob';
    }
    else{
        $u_fetch = mysqli_fetch_assoc($u_exist);

        if($u_fetch['status']==0){
           echo 'inactive';   
        }
        else{
            if($data['pass']!=$u_fetch['password'])
            {
                echo 'invalid_pass';
            }
            else{
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['uId'] = $u_fetch['id'] ;
                $_SESSION['uName'] = $u_fetch['name'] ;
                $_SESSION['uPic'] = $u_fetch['profile'] ;
                $_SESSION['uPhone'] = $u_fetch['phonenum'] ;
                echo 1;
            }
        }
    }
>>>>>>> 453e06e776c53f41f8b4d9296e705165e9f34bfc
}
?>
