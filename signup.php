<!DOCTYPE html>
<html lang="ar">
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="design.css">

    <title>إنشاء حساب</title>
</head>

<body style="backrround-color: #352819">

<section class="back">
    <div class="overlay"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <form class="signup-box" action="signup.php" method="POST">

            <h2>إنشاء حساب</h2>

            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            <input type="text" name="username" placeholder="اسم المستخدم" required>
            <input type="password" name="password" placeholder="كلمة المرور" required minlength="6">
            <input type="password" name="confirm_password" placeholder="تأكيد كلمة المرور" required>

            <button type="submit" class="arrow-btn"><i class="fa-solid fa-arrow-left"></i></button>

            <p class="or-line">أو</p>

            <button type="button" class="google-btn"><i class="fa-brands fa-google"></i> التسجيل باستخدام Google</button>
            <button type="button" class="facebook-btn"><i class="fa-brands fa-facebook"></i> التسجيل باستخدام Facebook</button>
            <button type="button" class="apple-btn"><i class="fa-brands fa-apple"></i> التسجيل باستخدام Apple</button>

            <p class="login-link">
                لديك حساب بالفعل؟ <a href="login.php">سجّل دخول</a>
            </p>

        </form>
    </div>
</section>
<!-- Footer Section -->
<footer class="footer">
  <div class="footer-container">
    
    <div class="contact-section">
      <h3>Contact Us:</h3>

      <p><strong>Phones:</strong></p>
        <ul class="links">
                    <li>Dareen Ghareeb: <a target="_blank" href="https://www.linkedin.com/in/dareen-ghareeb-el-naggar">www.linkedin.com/in/dareen-ghareeb-el-naggar</a></li>
                    <li>Demiana Ashraf: <a target="_blank" href="https://www.linkedin.com/in/demiana-ashraf404">www.linkedin.com/in/demiana-ashraf404</a></li>
                    <li>Bassant Sarea: <a target="_blank" href="https://www.linkedin.com/in/basant-sarea-45h">www.linkedin.com/in/basant-sarea-45h</a></li>
                    <li>Rashy Maged: <a target="_blank" href="https://www.linkedin.com/in/rashy-maged-4b500b30b">www.linkedin.com/in/rashy-maged-4b500b30b</a></li>
                    <li>Kholoud Mohamed: <a target="_blank" href="https://www.linkedin.com/in/kholoud-mohammed-70562a375">www.linkedin.com/in/kholoud-mohammed-70562a375</a></li>
                </ul>

    </div>

    <div class="email-section">
      <p><strong>Gmail:</strong> egyptian.team@gmail.com</p>
    </div>

    <div class="logo-ar">
      رحلة للتاريخ
    </div>

  </div>

  <div class="footer-bottom">
    © 2025 Egyptian Team. All Rights Reserved.
  </div>
</footer>

<script src="JS/bootstrap.bundle.min.js"></script>

</body>
</html>
