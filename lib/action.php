<?php
    $mode = isset($midx) ? $midx: NULL;
    extract($_POST);
    switch ($mode) {
        // Join
        case 'join':
            re([
                $userName,
                $userId,
                $userPw,
            ]);
            $user = execute("insert into member set userName = ?, userId = ?, userPw = ?",
            array($userName, $userId, $userPw));
            alert("회원가입이 완료 되었습니다.", "/");
        break;
    }
?>