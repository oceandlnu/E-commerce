<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 下午1:29
 */
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$verify = $_POST['verify'];
$verify_1 = $_SESSION['verify'];