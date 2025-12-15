

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
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="levelStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap" rel="stylesheet">

    
</head>
<body>
    
     <section class="head">
      <nav>
            <span class="logo aref-ruqaa-bold">رحلة للتاريخ</span>
            <ul class="links cairo">
              <li><a href="#">تسجيل الخروج</a></li>  
               <li> <a href="#">تواصل معنا</a></li>
                <li><a href="#">ابدأ اللعب</a></li>
                <li><a href="#">عن اللعبة</a></li>
                <li><a href="#">الرئيسية</a></li>
            </ul>
        </nav>


        <div class="content">
         

         <div class="question">
            <p>السؤال <?php echo $level['level_id']; ?></p>
 
            <p class="symbols"><?php echo $level['question']; ?></p>

           <input type="text" placeholder="حول الرموز الهيروغليفية الي عربي..." class="_input">
          <br>

            <button class="submit-btn" onclick="goToinfo()">اكتشف النتيجة</button>

            <p>ملاحظة الحروف تقرأ من اليمين الي اليسار</p>


            <?php if (!empty($resultMessage)): ?>
                    <div class="result">
                        <?php echo $resultMessage; ?>
                    </div>
                <?php endif; ?>
        </div>


        <div class="letters ">
            <span>أ = 𓄿</span>
            <span>ب = 𓃀</span>
            <span>پ / ب =𓊪</span>
            <span>ت = 𓏏 </span>
            <span>ث / تش = 𓍿</span>
            <span>ج / چ = 𓆓</span>
            <span>ح = 𓎛</span>
            <span>خ = 𓐍</span>
            <span>د = 𓂧</span>
            <span>ر = 𓂋</span>
            <span>س / ص = 𓋴</span>
            <span>ش = 𓈙 </span>
            <span>غ = 𓎼</span>
            <span>ف = 𓆑</span>
            <span>ق = 𓈎</span>
            <span>ك = 𓎡</span>
            <span>ل = 𓃭</span>
            <span>م = 𓅓</span>
            <span>ن = 𓈖</span>
            <span>ه = 𓉔</span>
            <span>و = 𓅱</span>
            <span>ي = 𓇋</span>
          </div>

        </div>


     </section>


     <section class="footer">
      <button class="btn">الصفحة الرئيسية</button>
        <div>الألغاز : <?php 
                
                $currentPuzzle = $level['level_id'];
                
                $totalPuzzles = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM levels"));
                echo $currentPuzzle . "/" . $totalPuzzles;
                ?></div>
         <div>النقاط: <?php echo $totalPoints; ?></div>
          <div>المرحلة الحالية : <?php echo $level['level_id']; ?></div>
     </section>




     <script>
  function goToPage() {
    window.location.href = "page2.html";
  }
</script>
</body>
</html>