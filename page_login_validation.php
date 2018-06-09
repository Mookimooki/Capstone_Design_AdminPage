<!--
post형식으로 입력받은 id와 pw를 mongodb와 연동하여 비교 후
해당 collection이 있는지 확인, id와 pw 일치 여부 확인 후 로그인 진행
-->
<?php
@ini_set(‘display_error’, ‘On’);
@error_reporting(E_ALL);

session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {
//        echo "<meta http-equiv='refresh' content='0;url=page-login.php'>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'/>";
    exit;
}

require 'vendor/autoload.php'; // include Composer's autoloader

//post로 보낸 id와 pw를 전달받음
$received_id = $_POST["input_id"];
$received_pw = $_POST["input_pw"];

if ($received_id == null || $received_pw == null) {
    echo "<script>alert(\"아이디 또는 비밀번호를 입력하지 않았습니다!\");</script>";
    ?>
    <script>
        document.location.href = 'page-login.php';
    </script><?php
}

//mongoDB접속
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->user->admin;
$result = $collection->findOne( [ 'id' => $received_id, 'pw' => $received_pw ] );

//입력한 id, pw를 찾을 수 있다면
if($result != null) {
    echo "<script>alert(\"로그인 성공!\");</script>";

    //session 이용
    session_start();
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['user_name'] = $result['pw'];
    ?>

    <meta http-equiv='refresh' content='0;url=index.php'/>
    <?php

}
//찾을 수 없는 경우
else {
    echo "<script>alert(\"없는 ID 혹은 PW 오류!\");</script>";
    ?>
    <script>
        document.location.href = 'page-login.php';
    </script><?php
}
?>