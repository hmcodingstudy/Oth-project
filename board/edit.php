<?php
include "../inc/session.php";

$b_idx = $_GET["b_idx"];
$b_name = $_POST["b_name"];
$b_pwd = $_POST["b_pwd"];
$cate = $_POST["cate"];
$b_title = $_POST["b_title"];
$b_content = $_POST["b_content"];

$table_name = "board";

$w_date = date("Y-m-d");

include "../inc/dbcon.php";

$sql = "update $table_name set ";
$sql .= "b_name='$b_name', ";
$sql .= "b_pwd='$b_pwd', ";
$sql .= "cate='$cate', ";
$sql .= "b_title='$b_title', ";
$sql .= "b_content='$b_content', ";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$b_idx;";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\")
        location.href = \"list.php\";
    </script>
    ";
?>