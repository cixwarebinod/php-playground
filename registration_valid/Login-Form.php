<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
     $errors=[];
     $fname=trim($_POST['fname']," ");
     $lname=trim($_POST['lname']," ");
     $email=trim($_POST['email']," ");
     $add=trim($_POST['add']," ");
     $pass=$_POST['pass'];
     $cpass=$_POST['cpass'];

     if(!$fname || strlen($fname)<1){
         $errors['fname']='First Name is required';
     }
     elseif(strlen($fname)>255){
         $errors['fname']='First Name shouldnot exceed 255 strings';
     }
     if(!$lname || strlen($lname)<1){
        $errors['lname']='Last Name is required';
    }
    elseif(strlen($lname)>255){
        $errors['lname']='last Name shouldnot exceed 255 strings';
    }
    if(!$email || strlen($email)<1){
        $errors['email']='Email submission is compulsory';
    }
    elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
          $errors['email']=" is NOT a valid email address";
        }
    if(!$add || strlen($add)<1){
        $errors['add']='Please enter your address';
    }
    elseif(strlen($add)>255){
        $errors['add']='Addres shouldnot exceed 255 strings';
    }
    if(!$add || strlen($add)<1){
        $errors['add']='Please enter your address';
    }
    elseif(strlen($add)>255){
        $errors['add']='Addres shouldnot exceed 255 strings';
    }
    if(strlen($pass)<5){
        $errors['pass'] = "Password must be at least 6 digit";
    }
    elseif(!strcmp($pass,$cpass)==0){
        $errors['pass']="Password didnot match";
    }
else{
    session_start();
    $_SESSION['fname']=$fname;
    header('location:welcome.php');
}
}
 ?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="#" method="POST">
            <table>  
                <tr>
                    <td>
                        <label for="fname">First Name</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter your name" id="fname" name="fname" value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $fname; ?>">
                    </td>
                    <td>
                        <span style="color:red">
                        <?php
                        if(isset($errors['fname'])) {
                            echo $errors['fname'];
                            }
                        ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lname">Last Name</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter your name" id="fname" name="lname" value="<?php if($_SERVER['REQUEST_METHOD']=== 'POST') echo $lname; ?>">
                    </td>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['lname'])){
                                    echo $errors['lname'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="text" placeholder="e.g jdoe@gmail.com" id="email" name="email" value="<?php if($_SERVER['REQUEST_METHOD']==='POST') echo $email; ?>">
                    </td>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['email'])){
                                    echo $errors['email'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter your Address" id="add" name="add" value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $add; ?>">
                    </td>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['add'])){
                                    echo $errors['add'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="pass">
                    </td>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['pass'])){
                                    echo $errors['pass'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cpassword">Con Password</label>
                    </td>
                    <td>
                        <input type="password" name="cpass">
                    </td>
                    <td>
                            <span style="color:red">
                                <?php
                                if(isset($errors['pass'])){
                                    echo $errors['pass'];
                                }
                            ?>
                            </span>
                    </td>
                </tr>
                
                <tr>
                <td>&nbsp;</td>
                    <td colspan="2">
                        <input type="submit" value="register">
                        <Input type="reset" value="cancel">
                    </td>
                </tr>
            </table> 
        </form>
    </body>
</html>
<style>
body{
    background: lightgray;
}
    table{
        margin:200px auto;
        border:3px solid gray;
        padding:20px;
        border-radius: 4px;
        box-shadow: 5px 10px 15px;
        background: #F5F5F5
    }
    input{
        height:30px;
    }
</style>