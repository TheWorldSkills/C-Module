<?php
    include_once("./lib/lib.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인, 회원가입 페이지</title>
</head>
<body>
    <form class="form-login" action="/action/login" method="post">
    <div class="container">
        <div class="login">
            <span>로그인 섹션입니다</span>
            <input type="text" id="id" placeholder="Email을 입력하세요" name="userId">
            <input type="password" id="password" placeholder="password를 입력하세요" name="userPw">
        </div>
    </form>
    <form class="form-join" action="/action/join" method="post">
        <div class="join">
            <span>회원가입 섹션입니다</span>
            <input type="text" id="name" placeholder="이름을 입력하세요" name="userName">
            <input type="text" id="id" placeholder="Email을 입력하세요" name="userId">
            <input type="password" id="password" placeholder="password를 입력하세요" name="userPw">
            <button type="submit" id="submit" name="submit">회원가입</button>
        </div>
    </form>
    </div>
</body>
</html>