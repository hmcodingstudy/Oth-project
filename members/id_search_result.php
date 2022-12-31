<?php
$u_id = $_POST["user_id"];

include "../inc/dbcon.php";

$sql = "select u_id from members where u_id='$u_id';";

$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <script type="text/javascript">
        function return_id(){
            opener.document.querySelector(".u_id").value = "<?php echo $u_id; ?>";
            window.close();
        }
    </script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500&display=swap");
        body {
            font-family: "Noto Sans KR", sans-serif;
            color: #222222;
        }
        .total{
            width:400px;
            height:300px;
            border: 1px solid rgb(165, 165, 165);
            box-sizing: border-box;
            text-align:center;
        }
        .title{
            width: 100%;
            height: 50px;
            display:block;
            background-color: rgb(181, 181, 181);
            line-height: 51px;
            text-align: center;
        }
        .txt_1,.txt_2{
            margin:50px 0 50px;
        }
        .re_search, .use{
            display:block;
            background-color: black;
            color:white;
            width:110px;
            height: 40px;
            cursor:pointer;
            margin-right: 5px;
        }
        .close{
            display:block;
            background-color: white;
            color:black;
            width:110px;
            height: 40px;
            border: 1px solid black;
            cursor:pointer;
        }
        .reseult_1,.result_2{
            width:231px;
            display: flex;
            line-height: 38px;
            margin:auto;
        }
        .id_txt{
            margin:0 4px 0;
            color:blue;
        }
    </style>
</head>
<body>
    <div class="total">
        <span class="title">아이디 중복 확인</span>
        <?php if(!$num){ ?> 
        <p class="txt_1">
            입력하신<span class="id_txt">"<?php echo $u_id; ?>"</span>은(는) 사용할 수 있는 아이디입니다.
        </p>
        <p class="reseult_1">
            <br><a href="#" class="use" onclick="return_id()">사용하기</a>
            <a href="#" class="re_search" onclick="history.go(-1)">다시 검색</a>
            <!-- onclick="javascript"에서 javascript는 원래 안쓰는데 원래 스크립트가 동작되는 브라우저에서 동작하지 않을때 써줌. back()  =  go(-1)  같음-->
        </p>
        <?php } else{ ?>
        <p class="txt_2">
            입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span>없는</span> 아이디입니다.
        </p>
        <p class="result_2">
            <a href="#" class="re_search" onclick="javascript:history.back();">다시 검색</a>
            <a href="#" class="close" onclick="window.close();">닫기</a>
        </p>
    </div>
    <?php
    };
    mysqli_close($dbcon);
    ?>    
</body>
</html>