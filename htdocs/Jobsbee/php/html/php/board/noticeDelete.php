<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myNoticeID = $_GET['myNoticeID'];
    $myNoticeID = $connect -> real_escape_string($myNoticeID);

    $checkSql = "SELECT * FROM myNotice WHERE myMemberID=$_SESSION['myMemberID']";
    $result = $connect -> query($checkSql);

    $sql = "DELETE FROM myNotice WHERE myNoticeID={$myNoticeID}";
    $connect -> query($sql);
?>

<script>
    location.href = "./notice.php";
</script>