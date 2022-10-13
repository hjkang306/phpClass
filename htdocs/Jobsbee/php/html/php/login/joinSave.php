<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료</title>
</head>
<body>
    <main id="main">
        <section id="banner">
            <h2>회원가입 완료 페이지 입니다.</h2>
            <div class="banner__inner2 container">
                <div class="img">
                    <img src="../asset/img/banner-03.svg" alt="배너이미지">
                </div>
                <div class="desc">
                    어떤 일이라도 <em>노력</em>하고 즐기면 그 결과는 <em>빛</em>을 바란다고 생각합니다. <br>
                    회원가입을 축하드립니다.
<?php
    include "../connect/connect.php";
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $youID = $_POST['youID'];
    $youPass = $_POST['youPass'];
    $youAddress = $_POST['youAddress1']." ".$_POST['youAddress2']." ".$_POST['youAddress3']." ";
    $youPhone = $_POST['youPhone'];
    $youEmail = $_POST['youEmail'];
    $regTime = time();

    $youName = $connect -> real_escape_string(trim($youName));
    $youBirth = $connect -> real_escape_string(trim($youBirth));
    $youID = $connect -> real_escape_string(trim($youID));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youAddress = $connect -> real_escape_string(trim($youAddress));
    $youPhone = $connect -> real_escape_string(trim($youPhone));
    $youEmail = $connect -> real_escape_string(trim($youEmail));

    $youPass = password_hash($youPass, PASSWORD_DEFAULT);

    // 회원가입
    $sql = "INSERT INTO myMember(youName, youBirth, youID, youPass, youAddress, youPhone, youEmail, regTime) VALUES('$youName','$youBirth','$youID','$youPass','$youAddress','$youPhone', '$youEmail','$regTime');";
    $result = $connect -> query($sql);
    echo $sql;
    if($result) {
        echo "<script>alert('회원가입을 축하드립니다!') location.href ='../main/main.php';</script>";
    }
    else {
        echo "에러발생 - 관리자에게 문의하세요!";
    }
?>
                </div>
            </div>
        </section>
        <!-- // banner -->
    </main>
    <!-- // main -->
</body>
</html>