<!DOCTYPE html>
<html >
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <head>
      <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>رحله عبر التاريخ</title>
        <!--bootstrap link-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--css file link--> 
        <link rel="stylesheet" href="css\style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" 
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="direction: ltr;">
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

  <section class="back_playing">
    <img class="top-img" src="images\parddy2.png" >

    <div class="text-over">
    <div class="letters-box">
             <div class="letters-grid">

    <div class="col">
        <div>أ = 𓄿</div>
        <div>ث / تش = 𓍿</div>
        <div>د = 𓂧</div>
        <div>غ = 𓎼</div>
        <div>ل = 𓃭</div>
    </div>

    <div class="col">
        <div>و = 𓅱</div>
        <div>م = 𓅓</div>
        <div>ف = 𓆑</div>
        <div>ر = 𓂋</div>
        <div>ج / چ = 𓆓</div>
        <div>ب = 𓃀</div>
    </div>
 <div class="col">
        <div>ي = 𓇋</div>
        <div>ن = 𓈖</div>
        <div>ق = 𓈎</div>
        <div>س / ص = 𓋴</div>
        <div>ح = 𓎛</div>
        <div>پ = 𓊪</div>
    </div>

    <div class="col">
        <div>ه = 𓉔</div>
        <div>ك = 𓎡</div>
        <div>ش = 𓈙</div>
        <div>خ = 𓐍</div>
        <div>ت = 𓏏</div>
    </div>
    
    </div>

    <div class="right-box">
        <h2 class="level-title"> اللعز الاول</h2>

        <div class="symbols">
       <h3>  𓋴 𓇋 𓋴 𓅓  𓂋 </h3>
        </div>

        <input class="input-box" type="text" placeholder="حول الرموز الهيروغليفية الى عربي">

        <p class="note">ملاحظة: الحروف تُقرأ من اليمين إلى اليسار</p>

        <button class="result-btn">اكتشف النتيجة</button>

        <a class="end-link" href="landing2.html">إنهاء المغامرة</a>
    </div>

</section>
<footer class="game-footer">
    <div class="footer-box">
        <div class="footer-item">
            <span>المرحلة الحالية:</span>
            <strong id="level">1</strong>
        </div>

        <div class="footer-item">
            <span>النقاط:</span>
            <strong id="points">10</strong>
        </div>

        <div class="footer-item">
            <span>الألغاز:</span>
            <strong id="puzzles">1/5</strong>
        </div>

    </div>
</footer>

    </body>
</html>