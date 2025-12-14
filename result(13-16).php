<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=El+Messiri:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=El+Messiri:wght@400..700&family=Noto+Sans+Egyptian+Hieroglyphs&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/resultstyle.css"/>
    <title>رحلة للتاريخ - لغز الهيروغليفية</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#">رحلة للتاريخ</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="d-flex ms-auto align-items-center">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="langing1.html"> تسجيل الخروج </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> تواصل معنا </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">ابدأ اللعب </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">عن اللعبة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">الرئيسية</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <img src="images/king-mina.png" alt="King Mina background" class="bg-img" />
    <div class="main-game-container">
        <div class="info-image"><img src="images/kingmina2.jpeg" alt=""></div>
      <div class="input-area">
        <h5>الدور الاول</h5>
        <p>𓄿 𓈖 𓇋 𓅓</p>
        <h2>الملك مينا</h2>
        <p class="info">
          الملك مينا (أو نعرمر)، موحد القطرين (مصر العليا والسفلى)، هو مؤسس
          الأسرة الأولى وحكم حوالي 3200 ق. م، ويعتبر أول ملك لمصر الموحدة التي
          جمعت بين مملكتي الشمال والجنوب في دولة مركزية واحدة، وأسس عاصمة جديدة
          هي منف (ممفيس)، ولقب بـ"ملك الأرضين" و"صاحب التاجين"، وهو من أبرز
          الشخصيات التي أسست الحضارة المصرية القديمة
        </p>
        <button class="game-submit-btn">
          <a href="result.html">اكتشف سرا جديدا</a>
        </button>
      </div>
    </div>

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
        <a href="index.html" class="footer-btn">الصفحة الرئيسية</a>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
