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
    <link rel="stylesheet" href="css/gamestyle.css" />
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
      <div class="puzzle-box-container">
        <div class="letters-box">
          <div class="letters-grid">
            <div class="col">
              <div>ت = 𓏏</div>
              <div>خ = 𓐍</div>
              <div>ش = 𓈙</div>
              <div>ك = 𓎡</div>
              <div>ه = 𓉔</div>
            </div>
            <div class="col">
              <div>پ = 𓊪</div>
              <div>ح = 𓎛</div>
              <div>س / ص = 𓋴</div>
              <div>ق = 𓈎</div>
              <div>ن = 𓈖</div>
              <div>ي = 𓇋</div>
            </div>
            <div class="col">
              <div>ب = 𓃀</div>
              <div>ج / چ = 𓆓</div>
              <div>ر = 𓂋</div>
              <div>ف = 𓆑</div>
              <div>م = 𓅓</div>
              <div>و = 𓅱</div>
            </div>
            <div class="col">
              <div>أ = 𓄿</div>
              <div>ث / تش = 𓍿</div>
              <div>د = 𓂧</div>
              <div>غ = 𓎼</div>
              <div>ل = 𓃭</div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-spacer"></div>
      <div class="input-area">
        <p>𓄿 𓈖 𓇋 𓅓</p>
        <input
          type="text"
          class="game-input"
          placeholder=".... اكتب ترجمة الرموز هنا"
        />
        <br />
        <span>ملاحظة: الحروف تقرأ من اليمين إلي اليسار</span>
        <br /><br />
        <button class="game-submit-btn">
          <a href="result.html">كشف النتيجة</a>
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
