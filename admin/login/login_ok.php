<?php
session_start();

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];

include "../inc/dbcon.php";

$sql = "select idx, u_name, u_id, pwd from members where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);

if(!$num){ // 일치하는 아이디가 없다면
    // 메세지 출력 후 이전 페이지로 이동
    echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 아이디가 없습니다.\");
            // location.href = \"login.php\";
            history.back();
        </script>
    ";

} else{// 일치하는 아이디가 존재하면
    // DB에서 사용자 정보 가져오기
    $array = mysqli_fetch_array($result);
    $g_pwd = $array["pwd"];

    if($pwd != $g_pwd){// 사용자가 입력한 비밀번호와 DB에서 가져온 비밀번호가 일치하지 않는다면
        // 메세지 출력 후 이전 페이지로 이동
        echo "
            <script type=\"text/javascript\">
                alert(\"비밀번호가 일치하지 않습니다.\");
                history.back();
            </script>
        ";
    } else{// 비밀번호가 일치한다면
        echo "
            <script type=\"text/javascript\">
                alert(\"로그인 되었습니다.\");
            </script>
        ";
        $_SESSION["s_idx"] = $array["idx"];
        $_SESSION["s_name"] = $array["u_name"];
        $_SESSION["s_id"] = $array["u_id"];
    };
};

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        location.href=\"../index.php\";
    </script>
";
?>