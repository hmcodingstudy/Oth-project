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
        <span class="title">????????? ?????? ??????</span>
        <?php if(!$num){ ?> 
        <p class="txt_1">
            ????????????<span class="id_txt">"<?php echo $u_id; ?>"</span>???(???) ????????? ??? ?????? ??????????????????.
        </p>
        <p class="reseult_1">
            <br><a href="#" class="use" onclick="return_id()">????????????</a>
            <a href="#" class="re_search" onclick="history.go(-1)">?????? ??????</a>
            <!-- onclick="javascript"?????? javascript??? ?????? ???????????? ?????? ??????????????? ???????????? ?????????????????? ???????????? ????????? ??????. back()  =  go(-1)  ??????-->
        </p>
        <?php } else{ ?>
        <p class="txt_2">
            ???????????? <span class="id_txt">"<?php echo $u_id; ?>"</span>??? ????????? ??? <span>??????</span> ??????????????????.
        </p>
        <p class="result_2">
            <a href="#" class="re_search" onclick="javascript:history.back();">?????? ??????</a>
            <a href="#" class="close" onclick="window.close();">??????</a>
        </p>
    </div>
    <?php
    };
    mysqli_close($dbcon);
    ?>    
</body>
</html>