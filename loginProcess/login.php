<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 창</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="">
                <img class="logo_img" src="../image/아이콘.png" alt="로고 이미지">
                <h1> DayDream<br> Capture Your Moment </h1>
            </a>
    </header>

    <div class="login-container">
        <h2>로그인</h2>
        
        <?php if(isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <form action="../src/login_server.php" method="post">
            <label for="username">아이디</label>
            <input type="text" id="id" name="user_id" required>
            
            <label for="password">비밀번호</label>
            <input type="password" id="password" name="password" required>
            <a href="register.php">회원정보가 없으신가요?</a>
            <a href="newpassword.html">비밀번호를 까먹으셨나요?</a>
            <button type="submit">로그인</button>
        </form>
    </div>

    <footer>
        <div class="footer-container">
            <p>
                © 2024 All Rights Reserved.
                <a href="">개인정보 보호</a>
                |
                <a href="help.html">도움말</a>
                |
                <a href="">서비스 약관</a>
                |
                <a href="contact.html">연락처</a>
            </p>
        </div>
        </div>
    </footer>
</body>
</html>
