<?php
require 'db.php';

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function verifyInstagram($username) {
    // هنا يتم تنفيذ API للتحقق من متابعة انستقرام
    // هذه دالة وهمية للتوضيح فقط
    return true; // في الواقع تحتاج إلى تطبيق Instagram API
}

function getWatchProgress($user_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM watch_progress WHERE user_id = ?");
    $stmt->execute([$user_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
