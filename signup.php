<?php
    include_once 'resource/Database.php';
    include_once 'resource/function.php';
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    if(check_duplicate($username,$db)){
        echo "<p class='alert alert-danger' style='color:red'>Username already taken</p>";
    }
    $sql_insert="INSERT INTO users(username,email,password,join_date) values (:username,:email,:password,now())";
    $insert=$db->prepare($sql_insert);
    $insert->execute(array(':username'=>$username,':email'=>$email,':password'=>$password));
    if($insert->rowcount()==1)
        echo "<p class='alert alert-success'>Registered Successfully</p>";
}   
    $title="Signup Page";
    include_once 'partials/header.php';
?>
    <h4>Signup Page</h4>
<form method="post" action="">
    <div class="form-group">
    <label>Email</label><input type="email" class="form-control" placeholder="@" name="email">
    <label>Username</label><input type="text" name="username" class="form-control" placeholder="Username">
    <label>Password</label><input type="password" class="form-control" placeholder="password" name="password"><br>
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>  
<p><a href="index.php">Go back</a></p>
</form>
</body>
</html>