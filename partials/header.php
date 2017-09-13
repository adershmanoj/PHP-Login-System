<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php if(isset($title))echo $title; ?></title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    </head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">User Authentication System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <?php if(!isset($_SESSION['username'])):?>
                        <li><a href="#">About</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a href="#">Contact Us</a></li>
                <?php else:?>
                        <li><a href="#">My Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                <?php endif ?>
            </ul>
        </div>
        </div>
    </nav>
    <h2>User Authentication System </h2><hr>