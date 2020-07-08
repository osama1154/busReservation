<?php
if (!isset($_COOKIE['c']))
{
    header("location:login.php");

}
else{
if(isset($_COOKIE['c'])) {
    header("location:online_booking.php");
}
}
?>