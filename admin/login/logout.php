<?php
session_start();

unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

echo "
    <script type=\"text/javascript\">
        location.href=\"../../index.php\";
    </script>
";
?>