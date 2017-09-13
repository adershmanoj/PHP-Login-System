<!DOCTYPE html>
<?php 
    $title="Registration Index";
    include_once 'resource/session.php';
    include_once 'partials/header.php';
?>

    <div class="container"> 
<?php if(!isset($_SESSION['username'])):?>
<p>You are not signed in<br><a href="login.php">Sign in</a></p>
<p>Are you a new user?<br><a href="signup.php">Sign up</a></p>
<?php else:?>
<p>You are signed in as <?php echo $_SESSION['username']?><br><a href="logout.php">Sign out</a></p>
<?php endif ?>
</div>      
</body>
</html>