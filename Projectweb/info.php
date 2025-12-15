
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
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="infoStyle.css">
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


       

        <div class="main-content">

            <div class="information">
            <p><?php echo $levels['level_id']; ?> الأول</p>
            <p class="symbols"><?php echo $levels['question']; ?></p>
            <p><?php echo $levels['answer_of_qes']; ?></p>
            <p>
               <?php echo nl2br($levels['info']); ?>                                                
            </p>
            <button class="btn"
            onclick="window.location.href='Level 1-4.php?level_id=<?php echo $levels['level_id'] + 1; ?>'">
             اكتشف سرًا جديدًا
            </button>

            <button class="btn"
            onclick="window.location.href='levels.php'">
             انهاء المغامرة
            </button>

            </div>

             <div>
            <img src="images/tohotmos.jpg" width="200px" height="400px" class="image">
            </div>
        </div>

     </section>
    

     <section class="footer">
        <div>الألغاز :<?php  $currentPuzzle = $levels['level_id'];  
        $totalPuzzles = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM levels"));
                echo $currentPuzzle . "/" . $totalPuzzles;
                ?></div>
         <div>النقاط : <?php echo $totalPoints; ?></div>
          <div>المرحلة الحالية : <?php echo $levels['level_id']; ?></div>
     </section>


</body>
</html>