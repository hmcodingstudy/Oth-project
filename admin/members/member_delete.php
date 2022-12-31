<?php
$g_idx = $_GET["g_idx"];

include "../inc/dbcon.php";

$sql = "delete from members where idx=$g_idx;";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo $g_idx

echo "
    <script type=\"text/javascript\">
        alert(\"정상 처리되었습니다.\");
        location.href = \"list.php\";
    </script>
    ";
?>