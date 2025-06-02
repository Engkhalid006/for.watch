<?php
require_once 'includes/config.php';
require_once 'includes/auth.php';

// توجيه المستخدم بناءً على حالة تسجيل الدخول
if (isLoggedIn()) {
    header('Location: pages/home.php');
} else {
    header('Location: pages/login.php');
}
exit();
?>
