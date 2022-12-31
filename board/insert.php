<?php
include "../inc/session.php";

$table_name = "board";

$b_name = $_POST["b_name"];
$b_pwd = $_POST["b_pwd"];
$cate = $_POST["cate"];
$b_title = $_POST["b_title"];
$b_content = $_POST["b_content"];

$w_date = date("Y-m-d");

include "../inc/dbcon.php";
$sql = "insert into $table_name(";
$sql .= "b_name, b_pwd, cate, b_title, b_content, w_date";
$sql .= ") values(";
$sql .= "'$b_name', '$b_pwd', '$cate', '$b_title', '$b_content', '$w_date'";
$sql .= ");";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";
?>