<?php
$user=$_POST['user'];
$comment_id=$_POST['comment_id'];
include 'config.php';
$query="DELETE FROM comments WHERE `id`='$comment_id' AND `user`='$user'";
if($mysqli->query($query)){
    header("Location:MCmainpage.php");
}