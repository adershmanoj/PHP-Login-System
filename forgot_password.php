<?php 
include_once 'resource/Database.php';
$title="Forgot Password";
include_once 'partials/header.php';
if(isset($_POST['button'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $new_password=$_POST['confirm'];
    if($new_password!=$password)
        echo "<p style='color:red;border:1px solid grey;''>Passwords do not match</p>";
    else{
        $sql_query="SELECT email FROM users where email=:email";
        $prepare=$db->prepare($sql_query);
        $prepare->execute(array(':email'=>$email));
        if($prepare->rowcount()==1){
            $update="UPDATE users set password=:password where email=:email";
            $prepare=$db->prepare($update);
            $prepare->execute(array(':email'=>$email,':password'=>$password));
            echo "<p style='color:green'>Password reset successfully</p>";
        }
        else{
            echo "Email not registered";
        }
    }
}
?>  
    <h4>Password Reset</h4><hr>
    <form method="post" action="">
        <div class="form-group">
            <label>Email</label><input type="email" placeholder="@" class="form-control" name="email">
            <label>Password</label><input type="password" placeholder="password" class="form-control" name="password">
            <label>Confirm Password</label><input type="password" placeholder="Confirm" class="form-control" name="confirm"><br>
            <button type="submit" name="button" class="btn btn-primary pull-right">Submit</button>
        </div>
    </form>
    <a href="index.php">Go back</a>
</body>
</html>