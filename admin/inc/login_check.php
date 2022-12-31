<?php
if(!$s_idx || $s_id!="admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://oth.dothome.co.kr/Oth/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>