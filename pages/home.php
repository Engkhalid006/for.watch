<?php
require_once '../includes/auth.php';

if (!isLoggedIn()) {
    header('Location: ../pages/login.php');
    exit();
}

$progress = getWatchProgress($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>For Watch - الرئيسية</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1 class="logo">For Watch</h1>
        <nav>
            <a href="profile.php">الملف الشخصي</a>
            <a href="../includes/logout.php">تسجيل الخروج</a>
        </nav>
    </header>

    <main>
        <section class="continue-watching">
            <h2>استكمال المشاهدة</h2>
            <div class="content-grid">
                <?php foreach ($progress as $item): ?>
                <div class="content-item">
                    <img src="<?= htmlspecialchars($item['cover_image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                    <div class="progress-bar">
                        <div class="progress" style="width: <?= $item['progress_percent'] ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <script src="../assets/js/main.js"></script>
</body>
</html>
