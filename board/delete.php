<?php
$b_idx = $_GET["b_idx"];

$table_name = "board";

include "../inc/dbcon.php";

$sql = "delete from $table_name where idx=$b_idx;";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        alert(\"정상 처리되었습니다.\");
        location.href = \"list.php\";
    </script>
    ";
?>