<?php
include "../inc/session.php";

$n_idx = $_GET["n_idx"];
$n_pwd = $_POST["n_pwd"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

$table_name = "notice";

$w_date = date("Y-m-d");

include "../inc/dbcon.php";

$sql = "update $table_name set ";
$sql .= "n_title='$n_title', ";
$sql .= "n_content='$n_content', ";
$sql .= "writer='$writer', ";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$n_idx;";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        location.href = \"view.php?n_idx=$n_idx\";
    </script>
    ";
?>