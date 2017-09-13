<?php
    include_once 'resource/function.php';
    include_once 'resource/session.php';
    session_destroy();
    redirect('index');
?>