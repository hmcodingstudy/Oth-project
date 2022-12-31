<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oth,</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../css/join.css" />
    <script type="text/javascript">
        function addrAPI() {
        new daum.Postcode({
            oncomplete: function (data) {
            var addr = "";
            if (data.userSelectedType === "R") {
                addr = data.roadAddress;
            } else {
                addr = data.jibunAddress;
            }
            document.querySelector(".pscode").value = data.zonecode;
            document.querySelector(".addr_1").value = addr;
            document.querySelector(".addr_2").focus();
            },
        }).open();
        }
    </script>
</head>
<body>
    <div class="main_page">
        <header>
            <div class="header_menubar" onclick="openNav()">menu bar</div>
            <a href="../index.php" class="header_logo">Oth,</a>
            <div class="header_customer_nav">
                <form name="" action="" method="" class="search_box">
                    <fieldset>
                    <legend>검색</legend>
                    <p>
                        <label for="search">입력</label>
                        <input type="text" id="search">
                    </p>
                    </fieldset>
                </form>
                <a href="#" class="go_search">search</a>
                <a href="mypage.php" class="go_mypage">my page</a>
                <a href="../cart.php" class="go_cart">cart</a>
            </div>
        </header>
        <div class="gnb">
            <a href="javascript:void(0)" class="gnb_close_btn" onclick="closeNav()">접기 아이콘</a>
            <ul>
                <li><a href="../about.php">About</a></li>
                <li><a href="../shop.php">Shop</a></li>
                <li><a href="../board/list.php">QnA</a></li>
                <li><a href="../notice/list.php">Notice</a></li>
            </ul>
            <div class="sidebar_login_wrap">
                <?php if(!$s_idx){ ?>
                <!-- 로그인 전 -->
                <div class="bf_login">
                    <a href="../login/login.php" class="sidebar_login">Login</a>
                    <span>/</span>
                    <a href="join.php" class="sidebar_join">Join</a>
                </div>
                <?php } else if($s_id == "admin"){ ?>
                <!-- 관리자 로그인 -->
                <div class="af_login">
                    <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                    <span>/</span>
                    <a href="mypage.php" class="sidebar_mypage">my page</a>
                    <?php } else{ ?>
                </div>
                <!-- 로그인 후 -->
                <div class="af_login">
                    <a href="../login/logout.php" class="sidebar_logout">Logout</a>
                    <span>/</span>
                    <a href="mypage.php" class="sidebar_mypage">my page</a>
                    <?php }; ?>
                </div>
            </div>
        </div>
        <main>
            <form class="join_form" name="join_form" action="insert.php" method="post" onsubmit="return form_check()">
                <fieldset>
                    <legend>Join</legend>
                    <div class="join_box">
                        <div class="join_namewrap">
                            <label for="u_name">이름*</label>
                            <p><input type="text" name="u_name" class="u_name"></p>
                            <span id="err_name" class="err_txt"></span>
                        </div>
                        <div class="join_idwrap">
                            <label>아이디* (영문,숫자 5~15자 이내)</label>
                            <p>
                                <input type="text" name="u_id" class="u_id" onclick="id_search()">
                                <button type="button" class="id_search" onclick="id_search()">중복 확인</button>
                            </p>
                                <span id="err_id" class="err_txt"></span>
                        </div>
                        <div class="join_pwdwrap">
                            <label>비밀번호* (영문 ,숫자 8~16자 이내)</label>
                            <p><input type="password" name="pwd" class="pwd"></p>
                            <span id="err_password" class="err_txt"></span>
                        </div>
                        <div class="join_repwdwrap">
                            <label>비밀번호 확인*</label>
                            <p><input type="password" name="repwd" class="repwd"></p>
                            <span id="err_repassword" class="err_txt"></span>
                        </div>
                        <div class="join_mobilewrap">
                            <label>전화번호*</label>
                            <p>
                                <input type="text" name="mobile_1" class="mobile_box1">
                                <span class="mobile_text1">-</span>
                                <input type="text" name="mobile_2" class="mobile_box2">
                                <span class="mobile_text2">-</span>
                                <input type="text" name="mobile_3" class="mobile_box3">
                            </p>
                            <span id="err_mobile" class="err_txt"></span>
                        </div>
                        <div class="join_addrwrap">
                            <label>주소*</label>
                            <p>
                                <input type="text" name="pscode" class="pscode" onclick="addrAPI()" placeholder="우편번호">
                                <button type="button" class="addr_search" onclick="addrAPI()">검색</button>
                                <p><input type="text" name="addr_1" class="addr_1" placeholder="기본 주소"></p>
                                <p><input type="text" name="addr_2" class="addr_2" placeholder="상세 주소"></p>
                                <span id="err_addr" class="err_txt"></span>
                            </p>
                        </div>
                        <div class="join_emailwrap">
                            <label>이메일*</label>
                            <p>
                                <input type="text" name="email_id" id="email_id" size="12">
                                <span class="email_txt">@</span>
                                <input type="text" name="email_dns" id="email_dns" size="12">
                                <select name="email_sel" id="email_sel" onchange="change_email()">
                                    <option value="">직접입력</option>
                                    <option value="naver.com">네이버</option>
                                    <option value="hanmail.net">다음</option>
                                    <option value="gmail.com">구글</option>
                                </select>
                            </p>
                            <span id="err_email" class="err_txt"></span>
                        </div>
                        <div class="join_birthwrap">
                            <label>생년월일* (ex. 20001212)</label>
                            <p>
                                <input type="number" name="birth" class="birth">
                            </p>
                            <span id="err_birth" class="err_txt"></span>
                        </div>
                        <div class="join_genderwrap">
                            <label>성별*</label>
                            <p>
                                <div class="male">
                                    <input type="radio" name="gender" id="male" value="m">남자
                                </div>
                                <div class="female">
                                    <input type="radio" name="gender" id="female" value="f">여자
                                </div>
                            </p>
                            <span id="err_gender" class="err_txt"></span>
                        </div>
                        <div class="ag_wrap">
                            <div>
                                <input type="checkbox" name="apply_all" id="apply_all" onclick="all_apply()">모두 동의합니다.
                            </div>
                            <div>
                                <input type="checkbox" name="apply_box" class="apply_box" id="ag2" onclick="apply_check()">(필수) 이용약관과 개인정보 수집 및 이용에 동의합니다.
                                <br><span id="err_apply1" class="err_txt"></span>
                            </div>
                            <div>
                                <input type="checkbox" name="apply_box" class="apply_box" id="ag3"  onclick="apply_check()">(필수) 만 14세 이상입니다.
                                <br><span id="err_apply2" class="err_txt"></span>
                            </div>
                            <div>
                                <input type="checkbox" name="apply_box" class="apply_box" id="ag4" onclick="apply_check()">(선택) 이메일 및 SMS 마케팅 정보 수신에 동의합니다.
                                <br><span id="err_apply3" class="err_txt"></span>
                            </div>
                        </div>
                        <div class="joinbutton_wrap">
                            <button type="submit" class="join_member">가입하기</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </main>
        <footer>
            <div class="fs_info1">
                <p>Company Name: 오티에이치콤마(oth,) | Owner: 문예진 | Personal Info Manager: 오티에이치콤마</p>
                <p>Phone Number: 010-4854-8705 | Email: othcomma@gmail.com</p>
                <p>Address: 서울특별시 서대문구 연희로 25길 4-16 3층 | Business Registration Number:  229-22-66610</p>
            </div>
            <div class="fs_info2">
                <p>Business License:  2022-서울서대문-0252</p>
            </div>
            <div class="term">
                <div class="escrow_wrap">
                    <div class="escrow_logo"><img src="../images/escrow_inicisPay2.png"></img></div>
                    <div class="escrow_txt">안전구매(에스크로) 서비스 가맹점</div>
                </div>
                <div class="term_link_wrap">
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Confirm Entrepreneur Information</a>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript" src="../js/join.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
</body>
</html>