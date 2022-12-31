<?php
include "../inc/session.php";

$g_idx = $_GET["g_idx"];

include "../inc/login_check.php";
include "../inc/dbcon.php";

$sql = "select * from members where idx=$g_idx;";

$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oth,</title>
    <link rel="stylesheet" type="text/css" href="../../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../../css/member_info.css" />
    <script>
        function change_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");
            var idx = email_sel.options.selectedIndex;
            var g_txt = email_sel.options[idx].value;
            email_dns.value = g_txt;
        };
        function mem_del(){
            var rtn_val = confirm("정말 삭제하시겠습니까?");
            if(rtn_val == true){
                // location.href = "member_delete.php";
                location.href = "member_delete.php?g_idx=<?php echo $g_idx; ?>";
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <!-- 콘텐트 -->
    <div class="screen">
        <div class="title">회원관리</div>
        <!-- 원본 -->
        <form class="edit_form" name="edit_form" action="edit.php" method="post" onsubmit="return edit_form_check()">
            <fieldset class="mypage_col1">
                <h3>회원정보</h3>
                <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
                <div class="mypage_namewrap">
                    <span>이름</span>
                    <p><input type="text" class="mypage_namewrap_box" value="<?php echo $array["u_name"]; ?>"></p>
                </div>
                <div class="mypage_idwrap">
                    <span>아이디</span>
                    <p><input type="text" class="mypage_idwrap_box" value="<?php echo $array["u_id"]; ?>"></p>
                </div>
                <div class="mypage_pwdwrap">
                    <span>비밀번호</span>
                    <p><input type="password" class="mypage_pwdwrap_box" name="pwd" value="<?php echo $array["pwd"]; ?>"></p>
                </div>
                <div class="mypage_emailwrap">
                    <span>이메일</span>
                    <p>
                    <input type="text" name="email_id" id="email_id"  value="<?php echo $array["email_id"]; ?>">
                    <span class="email_txt">@</span>
                    <input type="text" name="email_dns" id="email_dns"  value="<?php echo $array["email_dns"]; ?>">
                    <select name="email_sel" id="email_sel" onchange="change_email()">
                        <option value="">직접입력</option>
                        <option value="naver.com">네이버</option>
                        <option value="hanmail.net">다음</option>
                        <option value="gmail.com">구글</option>
                    </select>
                    </p>
                </div>
                <div class="mypage_phonewrap">
                    <span>전화번호</span>
                    <p>
                        <input type="number" class="mypage_phonewrap_box1" name="mobile_1" value="<?php echo $array["mobile_1"]; ?>">
                        <span class="mypage_phonewrap_text1">-</span>
                        <input type="number" class="mypage_phonewrap_box2" name="mobile_2" value="<?php echo $array["mobile_2"]; ?>">
                        <span class="mypage_phonewrap_text2">-</span>
                        <input type="number" class="mypage_phonewrap_box3" name="mobile_3" value="<?php echo $array["mobile_3"]; ?>">
                    </p>
                </div>
                <div class="mypage_addresswrap">
                    <span>주소</span>
                    <p>
                        <input type="text" class="mypage_addresswrap_box" name="ps_code" value="<?php echo $array["ps_code"]; ?>">
                        <div>
                            <input type="text" name="addr_1" class="addr_1" value="<?php echo $array["addr_1"]; ?>">
                            <button>검색하기</button>
                        </div>
                        <input type="text" class="mypage_addresswrap_box2"  name="addr_2" value="<?php echo $array["addr_2"]; ?>">
                    </p>
                </div>
                <div class="mypage_birthwrap">
                    <span>생년월일</span>
                    <p>
                        <input type="text" name="birth" class="mypage_birthwrap_box" value="<?php echo $array["birth"]; ?>">
                    </p>
                </div>
                <div class="mypage_genderwrap">
                    <span>성별</span>
                    <p class="mypage_genderwrap_box">
                        <div class="male">
                            <input type="radio" name="gender" id="male" value="m"<?php if($array["gender"] == "m") echo " checked";?>>남
                        </div>
                        <div class="female">
                            <input type="radio" name="gender" id="female" value="f"<?php if($array["gender"] == "f") echo " checked";?>>여
                        </div>
                    </p>
                </div>
            </fieldset>
            <fieldset class="mypage_col2">
                <table class="orderlist">
                    <h3>주문내역</h3>
                    <tr class="orderlist_row1">
                        <th class="orderlist_col1">상품 정보</th>
                        <th class="orderlist_col2">수량</th>
                        <th class="orderlist_col3">주문일</th>
                        <th>상태</th>
                    </tr>
                    <tr class="orderlist_row2">
                        <td>젊은 날의 바다</td>
                        <td>1</td>
                        <td>22.10.01</td>
                        <td>배송완료</td>
                    </tr>
                </table>
                <div class="mypost">
                    <h3>내가 쓴 글</h3>
                    <p>내가 쓴 글이 없습니다.</p>
                </div>
                <table class="point">
                    <h3>적립금 내역</h3>
                    <tr>
                        <th class="point_row1">지급일</th>
                        <th>적립 내역</th>
                        <th>적립액</th>
                        <th>유효기간</th>
                    </tr>
                    <tr>
                        <th class="point_row2">22.09.05</th>
                        <th>회원가입 포인트 증정</br></th>
                        <th>3000p</th>
                        <th>23.09.05</th>
                    </tr>
                </table>
                <div class="member_info_change_wrap">
                    <button class="change_btn" type="submit">정보수정</button>
                    <button class="delete_btn" type="button" onclick="mem_del()">삭제하기</button>
                </div>
            </fieldset>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
</body>
</html>