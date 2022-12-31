<?php
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$mobile_1 = $_POST["mobile_1"];
$mobile_2 = $_POST["mobile_2"];
$mobile_3 = $_POST["mobile_3"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$ps_code = $_POST["pscode"];
$addr_1 = $_POST["addr_1"];
$addr_2 = $_POST["addr_2"];
$gender = $_POST["gender"];
$birth = $_POST["birth"];
$reg_date = date("Y-m-d");

include "../inc/dbcon.php";

$sql = "insert into members(";
$sql .= "u_name, u_id, pwd, ";
$sql .= "mobile_1, mobile_2, mobile_3, ";
$sql .= "email_id, email_dns, ";
$sql .= "ps_code, addr_1, addr_2, ";
$sql .= "birth, ";
$sql .= "gender, reg_date";
$sql .= ") values(";
$sql .= "'$u_name', '$u_id', '$pwd',";
$sql .= "'$mobile_1','$mobile_2','$mobile_3',";
$sql .= "'$email_id', '$email_dns', ";
$sql .= "'$ps_code', '$addr_1', '$addr_2',";
$sql .= "'$birth',";
$sql .= "'$gender', '$reg_date');";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        location.href = \"join_result.php\";
    </script>
    ";

?>

