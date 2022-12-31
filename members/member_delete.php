<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$sql = "delete from members where idx=$s_idx;";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

echo "
    <script type=\"text/javascript\">
        alert(\"정상 처리되었습니다.\");
        location.href = \"../index.php\";
    </script>
    ";
?>