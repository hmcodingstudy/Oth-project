<?php
include "../inc/session.php";

$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

$w_date = date("Y-m-d");

include "../inc/dbcon.php";

$sql = "insert into notice(";
$sql .= "n_title, n_content, writer, w_date";
$sql .= ") values(";
$sql .= "'$n_title', '$n_content', '$s_name', '$w_date'";
$sql .= ");";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";
?>