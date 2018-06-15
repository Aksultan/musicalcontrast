<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    include"MCmainpage.php"; // Redirecting To Home Page
}
?>