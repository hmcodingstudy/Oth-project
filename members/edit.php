<?php
include "../inc/session.php";

$mobile_1 = $_POST["mobile_1"];
$mobile_2 = $_POST["mobile_2"];
$mobile_3 = $_POST["mobile_3"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$ps_code = $_POST["ps_code"];
$addr_1 = $_POST["addr_1"];
$addr_2 = $_POST["addr_2"];
$gender = $_POST["gender"];
$birth = $_POST["birth"];

include "../inc/dbcon.php";

$sql = "update members set " ;
$sql .= "mobile_1='$mobile_1', ";
$sql .= "mobile_2='$mobile_2', ";
$sql .= "mobile_3='$mobile_3', ";
$sql .= "email_id='$email_id', ";
$sql .= "email_dns='$email_dns', ";
$sql .= "ps_code='$ps_code', ";
$sql .= "addr_1='$addr_1', ";
$sql .= "addr_2='$addr_2', ";
$sql .= "birth='$birth', ";
$sql .= "gender='$gender' ";
$sql .= "where idx=$s_idx;";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href = \"mypage.php\";
    </script>
    ";
?>