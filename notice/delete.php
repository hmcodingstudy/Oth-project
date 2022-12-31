<?php
$n_idx = $_GET["n_idx"];

$table_name = "notice";

include "../inc/dbcon.php";

$sql = "delete from $table_name where idx=$n_idx;";

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        alert(\"삭제 완료되었습니다.\");
        location.href = \"list.php\";
    </script>
    ";
?>