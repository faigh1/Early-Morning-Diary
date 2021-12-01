<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_GET['myMemberID'];
    $boardID = $connect -> real_escape_string($myMemberID);

    $sql = "DELETE FROM myMember WHERE myMemberID = {$myMemberID}";
    $connect -> query($sql);
?>

<script>
    location.href = "../login/login.php";
</script>


<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardID = $_GET['boardID'];
    $boardID = $connect -> real_escape_string($boardID);

    $sql = "DELETE FROM myBoard WHERE myBoardID = {$boardID}";
    $connect -> query($sql);
?>

<script>
    location.href = "setting.php";
</script>