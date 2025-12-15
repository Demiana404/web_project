<?php
session_start();
include "db.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1; // للتجربة

/* نحدد اللغز اللي جاي من الصفحة اللي قبله */
$level_id = isset($_GET['level_id']) ? intval($_GET['level_id']) : 1;

$sql = "
SELECT 
    levels.level_id,
    levels.question,
    levels.answer_of_qes,
    pharaohs.info
FROM levels
JOIN pharaohs ON levels.pharaoh_id = pharaohs.pharaoh_id
WHERE levels.level_id = $level_id
";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $levels = mysqli_fetch_assoc($result);
} else {
    die("لا توجد بيانات لهذا اللغز");
}
// جلب مجموع النقاط من جدول user_progress
$totalPointsResult = mysqli_query($conn, "SELECT SUM(score_obtained) as total FROM user_progress WHERE user_id = $user_id");
$totalPointsRow = mysqli_fetch_assoc($totalPointsResult);
$totalPoints = $totalPointsRow['total'] ? $totalPointsRow['total'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information</title>
    <link rel="stylesheet" href="Level 1-4 Style.css">
</head>
<body style="background-color: #3F2819">
    <!-- 
        <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#">رحلة للتاريخ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="d-flex ms-auto align-items-center">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="langing1.html"> تسجيل الخروج </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> تواصل معنا </a></li>
                            <li class="nav-item"><a class="nav-link" href="">ابدأ اللعب </a></li>
                            <li class="nav-item"><a class="nav-link" href="#">عن اللعبة</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">الرئيسية</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        -->
    <div class="img-box">
            <img src="Images/Background.png" >
            <div class="layer"></div>
            
            <div class="inf-img"><img src="Images/حتشبسوت.png" alt="تمثال الملكة حتشبسوت"></div>

            <div class="inf-box">
                <div class="noofLevel"> اللغز <?php echo $levels['level_id']; ?></div>
                <div class="question2"><?php echo $levels['question']; ?></div>
                <div class="theAnswer"> <?php echo $levels['answer_of_qes']; ?></div>
                <div class="info"><?php echo nl2br($levels['info']); ?> </div>
                <a href="Level 1-4.php?level_id=<?php echo $levels['level_id'] + 1; ?>" id="rtlandcenter" class="next">اكتشف سرًا جديدًا</a>
                <a href="levels.php" class="infoEnd">انهاء المغامرة</a>
                
                </div>
            </div>
    </div>  
    
    <footer class="game-footer">
    <div class="footer-box">
        <div class="footer-item">
            <span>المرحلة الحالية:</span>
            <strong id="level"><?php echo $levels['level_id']; ?></strong>
        </div>

        <div class="footer-item">
            <span>النقاط:</span>
            <strong id="points"><?php echo $totalPoints; ?></strong>
        </div>

        <div class="footer-item">
            <span>الألغاز:</span>
            <strong id="puzzles"><?php 
                // نجلب عدد الأسئلة الحالية / إجمالي الأسئلة
                $currentPuzzle = $levels['level_id'];
                // عدد كل الأسئلة
                $totalPuzzles = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM levels"));
                echo $currentPuzzle . "/" . $totalPuzzles;
                ?></strong>
        </div>

        <a href="landing.php" class="footer-btn">الصفحة الرئيسية</a>
    </div>
    </footer>
</body>
</html>