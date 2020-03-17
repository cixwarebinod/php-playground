<?php

session_start();

function gotoLogin() {
    header('Location: Login-Form.php');
    session_destroy();
}



// if(!isset($_SESSION['fname'])) {
//     gotoLogin();
// }