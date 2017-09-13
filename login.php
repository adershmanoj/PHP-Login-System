<?php 
    $title="Login Page";
    include_once 'partials/header.php';
    include_once 'resource/session.php';
    include_once 'resource/Database.php';
    include_once 'resource/function.php';
    if(isset($_POST['button'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="SELECT * FROM users where username=:username AND password=:password";
        $statement=$db->prepare($query);
        $statement->execute(array(':username'=>$username,':password'=>$password));
        $row=$statement->fetch();
        if($row['id']==NULL)
                echo "<p class='alert alert-danger' style='color:red'>Wrong id/password</p>";
        if($row){
            $_SESSION[id]=$row['id'];
            $_SESSION[username]=$row['username'];
            echo "<p class='alert alert-success' style='color:green'>Login Successfull</p>";
            redirect('index');
        }
       
    }
    
?>
<h3>Login Page</h3>
<form method="post" action="">
    <div class="form-group">
        <label for="username">Username</label>
        <input type= "text" class="form-control"placeholder="username" name="username">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
        <label><input name="remember" type="checkbox"> Remember Me</label><br>
        <a href="forgot_password.php">Forgot Password</a>
        <button type="submit" class="btn btn-primary pull-right" name="button">Sign In</button>
    </div>
<p><a href="index.php">Go back</a></p>
<?php
    include_once 'resource/Database.php'?>
</form>
</body>
</html>