<html>

<head>
    <title>로그인 확인 페이지</title>
</head>

<body>
    <?php 
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    if($id == "admin" && $pass == "admin1234") { ?>
        로그인 성공
    <?php } else { ?>
        로그인 실패
    <?php } ?>
</body>

</html>