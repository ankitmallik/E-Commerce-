<?php
$conn = mysqli_connect('localhost','root','123456','health');
if(!$conn)
{
    die(mysqli_connect_error());
}