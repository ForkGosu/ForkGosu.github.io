<html>

<head>
    <title>로그인 페이지</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
<div class="wrapper">
  <div class="container">
    <div class="sign-in-container">
        <form method="POST" action="login_proc.php">
        <h1>Sign In</h1>
        <div class="social-links">
          <div>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </div>
          <div>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </div>
          <div>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </div>
        <span>위의 버튼은 간지 입니다</span>
        <input type="text" name="id" placeholder="아이디를 입력하세요">
        <input type="password" name="pass" placeholder="비밀번호를 입력하세요">
        <button class="form_btn">로그인</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay-left">
        <h1>Welcome Back</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button id="signIn" class="overlay_btn">Sign In</button>
      </div>
      <div class="overlay-right">
        <h1>안녕하세요</h1>
        <p>임시 로그인 페이지 입니다.</p><p> 당장 로그인해 주세요.</p>
      </div>
    </div>
  </div>
</div>
</body>

</html>