<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    // include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>

    <link rel="stylesheet" href="/setting/assets/css/setting.css">
    <link rel="stylesheet" href="/setting/assets/css/reset.css">
    <link rel="stylesheet" href="/setting/assets/css/fonts.css">
    <link rel="stylesheet" href="/setting/assets/css/var.css">

</head>

<div id="header">
    <div class="logout">
        <button><a href="../login/logout.php">로그아웃</a></button>
    </div>
    <div class="header__menu">
        <a href="../main/mainOne.html"><img src="assets/img/LogowhiteTitle.png" alt="로고"></a>
        <ul>
            <li class="active"><a href="changePw.php">비밀번호 변경</a></li>
            <li><a href="privacyTerms.php">개인 정보 약관</a></li>
            <li><a href="setting.php">공지 사항</a></li>
            <li><a href="goodbye.php">회원 탈퇴</a></li>
        </ul>
    </div>
    <div class="header__wrap">
        <div class="container">
            <div class="header__view">
                <h2>비밀번호를 변경할 수 있어요!</h2>

                <div class="changePw-wrap">
                    <fieldset>
                        <form name="changePw" action="changePwSave.php" method="POST">
                            <fieldset>
                                <legend class="ir_so">비밀번호 변경 입력폼</legend>
                                <div class="changePw-box">
                                    <div class="changePw-one">
                                        <div class="changePw-two">
                                            <div class="label-member-line">
                                                <label for="youPass">기존 비밀번호 입력</label>
                                            </div>
                                            <input type="password" name="youPass" id="youPass" class="input_cPw"
                                                autocmplete="off" autofocus require>
                                                <button>확인</button>
                                        </div>

                                    </div>

                                    <div> <!--라벨이름 설정-->
                                        <div class="label-member-line">
                                            <label for="youPass">새로운 비밀번호 입력</label>
                                        </div>
                                        <input type="password" name="youPass" id="youPass" class="input_cPw2"
                                            maxlength="20" autocmplete="off" required>
                                    </div>
                                    <div>
                                        <div class="label-member-line">
                                            <label for="youPassC">새로운 비밀번호 입력 확인</label>
                                        </div>
                                        <input type="password" name="youPassC" id="youPassC" class="input_cPw2"
                                            maxlength="20" autocmplete="off" required>
                                    </div>
                                </div>
                            </fieldset>
                            <button id="changePw" class="btn_cPw" type="submit">확인</button>
                        </form>
                    </fieldset>
                </div>
            </div>
            <footer id="footer">
                <div class="footerWrap">
                    <div class="fLogo">
                        <img src="assets/img/footerLogo.svg" alt="로그인 페이지 이미지입니다.">
                    </div>
                    <div class="fLogoTitle">
                        <ul>
                            <li>It's a calendar only for you</li>
                            <li>going to work at dawn.</li>
                            <li>I'll share my will with you.</li>
                        </ul>
                    </div>
                    <div class="textZon">
                        <ul>
                            <li><strong>공수 노트, 월급 계산기, 아르바이트 급여 계산기 @새벽시장</strong></li>
                            <li><strong>만든 프로그램 :</strong> 피그마, 포토샵, 일러스트, 자바스크립트, 제이쿼리, 리엑트, php</li>
                            <li><strong>만든 기간 :</strong> 2021.08.20 ~ </li>
                            <li><strong>만든 이 :</strong> 윤여찬, 허승연, 박세진, 전대섭, 인재연, 조범수, 송지원...</li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>




    <!-- //footer -->
    </body>

</html>