<?php
if($s_idx == ""){
    echo "
        <script type=\"text/javascript\">
            alert(\"로그인이 필요합니다.\");
            location.href = \"http://oth.dothome.co.kr/Oth/login/login.php\";
        </script>
    ";
    exit;
};
if(!$s_idx){
    echo "
        <script type=\"text/javascript\">
            alert(\"잘못된 접근입니다.\");
            location.href = \"http://oth.dothome.co.kr/Oth/localhost/Oth\";
        </script>
    ";
    exit;
};
?>