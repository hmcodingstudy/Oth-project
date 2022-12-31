<?php
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$mobile_1 = $_POST["mobile_box1"];
$mobile_2 = $_POST["mobile_box2"];
$mobile_3 = $_POST["mobile_box3"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$ps_code = $_POST["pscode"];
$addr_1 = $_POST["addr_1"];
$addr_2 = $_POST["addr_2"];
$addr = $ps_code." ".$addr_1." ".$addr_2;

include "../inc/dbcon.php";

$sql = "insert into members(";
$sql .= "u_name, u_id, pwd, ";
$sql .= "mobile_1, mobile_2, mobile_3, email, ";
$sql .= "ps_code, addr_1, addr_2";
$sql .= ") values(";
$sql .= "'$u_name', '$u_id', '$pwd',";
$sql .= "'$mobile_1','$mobile_2','$mobile_3', '$email',";
$sql .= "'$ps_code', '$addr_1', '$addr_2');";

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        // location.href = \"이동할 페이지 주소\";
        location.href = \"join_result.php\";
    </script>
    ";
?>
