<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if($mode == "delete"){ 

        $query0 = "select count(*) from Member where youEmail='$youEmail' and youPass='$youPass'";
        $result0 = mysql_result(mysql_query($query0),0,0);
        if($result0 < 1){
         echo "누구냐 넌!";
         exit;
        } else {
        $query = "delete from myMember where youEmail='$youEmail' and youPass='$youPass'";
               
            if($result = mysql_query($query)){
                   
            Msg('회원탈퇴가 정상적으로 되었습니다.!!');
            // $url    = "../";
        }
        
        Refresh($url);
                }
        }
?>

$sql = "SELECT myMemberID, youEmail, youPass FROM myMember WHERE youEmail = '$youEmail'";

$sql = "SELECT youEmail FROM myMember WHERE youEmail = '$youEmail'";