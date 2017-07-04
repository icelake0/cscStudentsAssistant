<?php
session_name('user');
session_start();
echo $_SESSION['firstname'];
echo" working fine";
?>