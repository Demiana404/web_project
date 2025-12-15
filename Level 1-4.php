<?php
session_start();

include "db.php";
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;

$totalPointsResult = mysqli_query($conn, "SELECT SUM(score_obtained) as total FROM user_progress WHERE user_id = $user_id");
$totalPointsRow = mysqli_fetch_assoc($totalPointsResult);
$totalPoints = $totalPointsRow['total'] ? $totalPointsRow['total'] : 0;

$level_id = isset($_GET['level_id']) ? intval($_GET['level_id']) : 1;

 $sql = "SELECT * FROM levels WHERE level_id = $level_id";

$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $level = mysqli_fetch_assoc($result);
} else {
    $level = null;
}

$resultMessage = "";



if ($_SERVER["REQUEST_METHOD"] == "POST" && $level) {
    $userAnswer = trim($_POST['answer_of_qes']);
    if ($userAnswer == $level['answer_of_qes']) {
        $pointsEarned = 10;        
        mysqli_query($conn, "INSERT INTO user_progress (user_id, level_id, score_obtained) 
                            VALUES ($user_id, ".$level['level_id'].", $pointsEarned)");
        header("Location: information.php?level_id=".$level['level_id']);
        exit;
    } else {
        $resultMessage = "إجابة خاطئة";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المستوي الأول</title>
    <link rel="stylesheet" href="Level 1-4 Style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body style="background-color: #3F2819">
    

    <section>
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
            <div class="horghlefe">
                <div class="item">أ = 𓄿 </div>
                <div class="item">  ب = 𓃀</div>
                <div class="item">پ  =𓊪</div>
                <div class="item">ت = 𓏏 </div>
                <div class="item">ث / تش = 𓍿</div>
                <div class="item">ج / چ = 𓆓</div>
                <div class="item">ح = 𓎛</div>
                <div class="item">خ = 𓐍 </div>
                <div class="item">د = 𓂧</div>
                <div class="item">ر = 𓂋 </div>
                <div class="item">س / ص = 𓋴</div>
                <div class="item">ش = 𓈙</div>
                <div class="item"> غ = 𓎼</div>
                <div class="item">ف = 𓆑</div>
                <div class="item">ق = 𓈎</div>
                <div class="item">ك = 𓎡</div>
                <div class="item">ل = 𓃭</div>
                <div class="item">م = 𓅓</div>
                <div class="item">ن = 𓈖</div>
                <div class="item">ه = 𓉔</div>
                <div class="item"></div>
                <div class="item">و = 𓅱</div>
                <div class="item">ي = 𓇋</div>
            
            </div>
            <div class="level1">
                <div class="noofLevel">اللغز <?php echo $level['level_id']; ?></div>
                <div class="question">
                    <?php echo $level['question']; ?>
                </div>
                <form method="POST" >
                <div>
                    <input type="text" name="answer_of_qes" id="word" placeholder="حول الرموز الهيروغليفية إلي عربي" required>
                </div>
                <div class="note">ملاحظة: الحروف تقرأ من اليمين إلي اليسار</div>
                <button type="submit" class="button" > اكشف النتيجة </button>
                <a href="levels.php" class="end">انهاء المغامرة</a>
                </form>
                <?php if (!empty($resultMessage)): ?>
                    <div class="result">
                        <?php echo $resultMessage; ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </section>

    <footer class="game-footer">
        <div class="footer-box">
        <div class="footer-item">
            <span>المرحلة الحالية:</span>
            <strong id="level"><?php echo $level['level_id']; ?></strong>
        </div>

        <div class="footer-item">
            <span>النقاط:</span>
            <strong id="points"><?php echo $totalPoints; ?></strong>
        </div>

        <div class="footer-item">
            <span>الألغاز:</span>
            <strong id="puzzles">
                <?php 
                // نجلب عدد الأسئلة الحالية / إجمالي الأسئلة
                $currentPuzzle = $level['level_id'];
                // عدد كل الأسئلة
                $totalPuzzles = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM levels"));
                echo $currentPuzzle . "/" . $totalPuzzles;
                ?>
            </strong>
        </div>

        <a href="landing.php" class="footer-btn">الصفحة الرئيسية</a>
        </div>
    </footer>

    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    

    


</body>
</html>