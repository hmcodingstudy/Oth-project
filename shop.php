<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oth,</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/shop.css" />
</head>
<body>
    <header>
        <div class="header_menubar" onclick="openNav()">menu bar</div>
        <a href="index.php" class="header_logo">Oth,</a>
        <?php if ($s_id == "admin"){ ?>
            <!-- 관리자일때 -->
            <a href="admin/index.php" class="go_admin">admin</a>
            <?php } else { ?>
            <!-- 로그인 전 -->
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
                <a href="members/mypage.php" class="go_mypage">my page</a>
                <a href="cart.php" class="go_cart">cart</a>
            </div>
        <?php }; ?>
    </header>
    <main>
        <div class="gnb">
            <a href="javascript:void(0)" class="gnb_close_btn" onclick="closeNav()">접기 아이콘</a>
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="board/list.php">QnA</a></li>
                <li><a href="notice/list.php">Notice</a></li>
            </ul>
            <div class="sidebar_login_wrap">
                <?php if(!$s_idx){ ?>
                <!-- 로그인 전 -->
                <div class="bf_login">
                    <a href="login/login.php" class="sidebar_login">Login</a>
                    <span>/</span>
                    <a href="members/join.php" class="sidebar_join">Join</a>
                </div>
                <?php } else if($s_id == "admin"){ ?>
                <!-- 관리자 로그인 -->
                <div class="af_login">
                    <a href="login/logout.php" class="sidebar_logout">Logout</a>
                    <span>/</span>
                    <a href="members/mypage.php" class="sidebar_mypage">my page</a>
                    <?php } else{ ?>
                </div>
                <!-- 로그인 후 -->
                <div class="af_login">
                    <a href="login/logout.php" class="sidebar_logout">Logout</a>
                    <span>/</span>
                    <a href="members/mypage.php" class="sidebar_mypage">my page</a>
                    <?php }; ?>
                </div>
            </div>
        </div>
        <ul class="tab_btn_wrap">
            <li><a href="#" class="tab_btn1 on" onclick="tab1_on()">All</a></li>
            <li><a href="#" class="tab_btn2"  onclick="tab2_on()">시각</a></li>
            <li><a href="#" class="tab_btn3"  onclick="tab3_on()">후각</a></li>
        </ul>
        <section class="tabs">
            <div class="tab1" >
                <div class="all_row1">
                    <div class="all_prd1">
                        <a href="product_page.php">젊은 날의 바다 이미지</a>
                        <p class="all_prd1_txt1">젊은 날의 바다</p>
                        <div class="all_prd1_txt2_wrap">
                            <p class="all_prd1_txt2">PRICE</p>
                            <p class="all_prd1_txt3">KRW 29,000</p>
                            <p class="all_prd1_txt4">
                                젊은 날의 바다 향은 윤슬이 반짝이는 바다가 주는 찬란함과 그 속에서 연상되었던 우리의 빛나는 청춘에서 영감을 받았습니다.
                                아름다웠던 순간을 눌러 담아 기억하기 위해 만든 시그니처 향.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="all_prd2">
                        <a>THE COMPANION 이미지</a>
                        <p class="all_prd2_txt1">THE COMPANION</p>
                        <div class="all_prd2_txt2_wrap">
                            <p class="all_prd2_txt2">PRICE</p>
                            <p class="all_prd2_txt3">KRW 42,000</p>
                            <p class="all_prd2_txt4">
                                사람간의 기억이 공유되는 세상을
                                한 번쯤 상상해 보셨나요?
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="all_row2">
                    <div class="all_prd3">
                        <a>Han River 이미지</a>
                        <p class="all_prd3_txt1">Han River</p>
                        <div class="all_prd3_txt2_wrap">
                            <p class="all_prd3_txt2">PRICE</p>
                            <p class="all_prd3_txt3">KRW 43,000</p>
                            <p class="all_prd3_txt4">
                                때때로 훌훌 마음을 털어놓고 싶은 장소가 서울에 있습니다.
                                바쁜 삶 속에서 하루의 고단함을 잊게 해주는 풍경.
                                살랑이는 바람과 따뜻한 날씨. 바로 그곳엔 위로가 있습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="all_prd4">
                        <a>Switzerland 이미지</a>
                        <p class="all_prd4_txt1">Switzerland</p>
                        <div class="all_prd4_txt2_wrap">
                            <p class="all_prd4_txt2">PRICE</p>
                            <p class="all_prd4_txt3">KRW 62,000</p>
                            <p class="all_prd4_txt4">
                                맑고 푸른 세상 한 폭을 잘라내 떠온 것 같은 느낌을 받을 수 있는 스위스 패브릭 포스터 속에 새로운 세상을 마주했던 설렘이 녹아있습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="all_row3">
                    <div class="all_prd5">
                        <a>Sunset 이미지</a>
                        <p class="all_prd5_txt1">Sunset</p>
                        <div class="all_prd5_txt2_wrap">
                            <p class="all_prd5_txt2">PRICE</p>
                            <p class="all_prd5_txt3">KRW 62,000</p>
                            <p class="all_prd5_txt4">
                                나 자신을 지치게 했던 세상을 등지고 나선 바다에는 희망이 있었습니다.
                                주황 빛으로 얇게 물든 찬란한 햇살은 그런 간절함이 배어있기 때문에 더욱 빛나는 건지도 모르겠습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="all_prd6">
                        <a>#4. 나른한 프라하의 카페 이미지</a>
                        <p class="all_prd6_txt1">#4. 나른한 프라하의 카페</p>
                        <div class="all_prd6_txt2_wrap">
                            <p class="all_prd6_txt2">PRICE</p>
                            <p class="all_prd6_txt3">KRW 24,000</p>
                            <p class="all_prd6_txt4">
                                모두가 공감하는 좋은 향기는 그 공간의 분위기를 반전시켜주는 역할을 합니다.
                                아무리 아름다운 장소여도 향기롭지 않으면 그 모습이 반갑지 않은 것처럼. 이토록 후각은 삶의 많은 영향을 끼칩니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="all_row4">
                    <div class="all_prd7">
                        <a>#3. 찬란한 니스 해변 이미지</a>
                        <p class="all_prd7_txt1">#3. 찬란한 니스 해변</p>
                        <div class="all_prd7_txt2_wrap">
                            <p class="all_prd7_txt2">PRICE</p>
                            <p class="all_prd7_txt3">KRW 24,000</p>
                            <p class="all_prd7_txt4">
                                기억 속 여행지에서 느꼈던 향기를 선정해 선향(線香)으로 만들었습니다. 이런 시도는 기억이 공유되는 세상을 미래의 기술이 아닌 과거의 지혜로 풀어낸다는 의미를 지니기도 하죠.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="all_prd8">
                        <a>#2. 베르사유 정원에서 피크닉 이미지</a>
                        <p class="all_prd8_txt1">#2. 베르사유 정원에서 피크닉</p>
                        <div class="all_prd8_txt2_wrap">
                            <p class="all_prd8_txt2">PRICE</p>
                            <p class="all_prd8_txt3">KRW 24,000</p>
                            <p class="all_prd8_txt4">
                                패키지를 살펴보면 그림처럼 펼쳐진 풍경과 실제 일기가 적혀있습니다.
                                누군가와 여행을 떠나는 기분으로 상자를 열어주세요.
                                함께 가벼운 산책길을 나설 당신의 방문을 기다리겠습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="all_row5">
                    <div class="all_prd9">
                        <a>#1. 비 오는 날의 스위스 이미지</a>
                        <p class="all_prd9_txt1">#1. 비 오는 날의 스위스</p>
                        <div class="all_prd9_txt2_wrap">
                            <p class="all_prd9_txt2">PRICE</p>
                            <p class="all_prd9_txt3">KRW 24,000</p>
                            <p class="all_prd9_txt4">
                                천연 선향 특성상 은은한 향이 피어오릅니다. 태우자 마자 강렬하게 다가오지 않기 때문에 오티에이치콤마의 인센스는 처음 사용하시는 분들께 부담없이 다가갑니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="all_prd10">
                        <a>젊은 날의 바다 시향지 이미지</a>
                        <p class="all_prd10_txt1">젊은 날의 바다 시향지</p>
                        <div class="all_prd10_txt2_wrap">
                            <p class="all_prd10_txt2">PRICE</p>
                            <p class="all_prd10_txt3">KRW 24,000</p>
                            <p class="all_prd10_txt4">
                                찬란했던 순간들의 이야기와 향기가 담겨있는 시향지는 지갑과 노트, 책 사이에 넣어 더욱 오래도록 향기를 간직해 보세요. 당신의 작은 순간들 속, 코 끝에 닿는 향긋한 향기는 지친 일상의 환기가 되어줍니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="all_row6">
                    <div class="all_prd11">
                        <a>해무 인센스 홀더 이미지</a>
                        <p class="all_prd11_txt1">해무 인센스 홀더</p>
                        <div class="all_prd11_txt2_wrap">
                            <p class="all_prd11_txt2">PRICE</p>
                            <p class="all_prd11_txt3">KRW 48,000</p>
                            <p class="all_prd11_txt4">
                                해무 인센스 홀더는 바다에서 피어오르는 안개에 영감을 받아 디자인되었습니다. 잔잔한 바다 위에 떠있는 당신의 어떤 고민과 생각들이 인센스가 모두 연소되는 순간 자연 속으로 사라지길 바라는 마음을 담았습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="tab2">
                <div class="tab2_row1">
                    <div class="tab2_prd1">
                        <a>THE COMPANION 이미지</a>
                        <p class="tab2_prd2_txt1">THE COMPANION</p>
                        <div class="tab2_prd2_txt2_wrap">
                            <p class="tab2_prd2_txt2">PRICE</p>
                            <p class="tab2_prd2_txt3">KRW 42,000</p>
                            <p class="tab2_prd2_txt4">
                                사람간의 기억이 공유되는 세상을
                                한 번쯤 상상해 보셨나요?
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="tab2_prd2">
                        <a>Han River 이미지</a>
                        <p class="tab2_prd3_txt1">Han River</p>
                        <div class="tab2_prd3_txt2_wrap">
                            <p class="tab2_prd3_txt2">PRICE</p>
                            <p class="tab2_prd3_txt3">KRW 43,000</p>
                            <p class="tab2_prd3_txt4">
                                때때로 훌훌 마음을 털어놓고 싶은 장소가 서울에 있습니다.
                                바쁜 삶 속에서 하루의 고단함을 잊게 해주는 풍경.
                                살랑이는 바람과 따뜻한 날씨. 바로 그곳엔 위로가 있습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="tab2_row2">
                    <div class="tab2_prd3">
                        <a>Switzerland 이미지</a>
                        <p class="tab2_prd4_txt1">Switzerland</p>
                        <div class="tab2_prd4_txt2_wrap">
                            <p class="tab2_prd4_txt2">PRICE</p>
                            <p class="tab2_prd4_txt3">KRW 62,000</p>
                            <p class="tab2_prd4_txt4">
                                맑고 푸른 세상 한 폭을 잘라내 떠온 것 같은 느낌을 받을 수 있는 스위스 패브릭 포스터 속에 새로운 세상을 마주했던 설렘이 녹아있습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="tab2_prd4">
                        <a>Sunset 이미지</a>
                        <p class="tab2_prd5_txt1">Sunset</p>
                        <div class="tab2_prd5_txt2_wrap">
                            <p class="tab2_prd5_txt2">PRICE</p>
                            <p class="tab2_prd5_txt3">KRW 62,000</p>
                            <p class="tab2_prd5_txt4">
                                나 자신을 지치게 했던 세상을 등지고 나선 바다에는 희망이 있었습니다.
                                주황 빛으로 얇게 물든 찬란한 햇살은 그런 간절함이 배어있기 때문에 더욱 빛나는 건지도 모르겠습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="tab2_row3">
                    <div class="tab2_prd5">
                        <a>해무 인센스 홀더 이미지</a>
                        <p class="tab2_prd5_txt1">해무 인센스 홀더</p>
                        <div class="tab2_prd5_txt2_wrap">
                            <p class="tab2_prd5_txt2">PRICE</p>
                            <p class="tab2_prd5_txt3">KRW 48,000</p>
                            <p class="tab2_prd5_txt4">
                                해무 인센스 홀더는 바다에서 피어오르는 안개에 영감을 받아 디자인되었습니다. 잔잔한 바다 위에 떠있는 당신의 어떤 고민과 생각들이 인센스가 모두 연소되는 순간 자연 속으로 사라지길 바라는 마음을 담았습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="tab3">
                <div class="tab3_row1">
                    <div class="tab3_prd1">
                        <a href="product_page.html">젊은 날의 바다 이미지</a>
                        <p class="tab3_prd1_txt1">젊은 날의 바다</p>
                        <div class="tab3_prd1_txt2_wrap">
                            <p class="tab3_prd1_txt2">PRICE</p>
                            <p class="tab3_prd1_txt3">KRW 29,000</p>
                            <p class="tab3_prd1_txt4">
                                젊은 날의 바다 향은 윤슬이 반짝이는 바다가 주는 찬란함과 그 속에서 연상되었던 우리의 빛나는 청춘에서 영감을 받았습니다.
                                아름다웠던 순간을 눌러 담아 기억하기 위해 만든 시그니처 향.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="tab3_prd2">
                        <a>#4. 나른한 프라하의 카페 이미지</a>
                        <p class="tab3_prd2_txt1">#4. 나른한 프라하의 카페</p>
                        <div class="tab3_prd2_txt2_wrap">
                            <p class="tab3_prd2_txt2">PRICE</p>
                            <p class="tab3_prd2_txt3">KRW 24,000</p>
                            <p class="tab3_prd2_txt4">
                                모두가 공감하는 좋은 향기는 그 공간의 분위기를 반전시켜주는 역할을 합니다.
                                아무리 아름다운 장소여도 향기롭지 않으면 그 모습이 반갑지 않은 것처럼. 이토록 후각은 삶의 많은 영향을 끼칩니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="tab3_row2">
                    <div class="tab3_prd3">
                        <a>#3. 찬란한 니스 해변 이미지</a>
                        <p class="tab3_prd3_txt1">#3. 찬란한 니스 해변</p>
                        <div class="tab3_prd3_txt2_wrap">
                            <p class="tab3_prd3_txt2">PRICE</p>
                            <p class="tab3_prd3_txt3">KRW 24,000</p>
                            <p class="tab3_prd3_txt4">
                                기억 속 여행지에서 느꼈던 향기를 선정해 선향(線香)으로 만들었습니다. 이런 시도는 기억이 공유되는 세상을 미래의 기술이 아닌 과거의 지혜로 풀어낸다는 의미를 지니기도 하죠.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                    <div class="tab3_prd4">
                        <a>#2. 베르사유 정원에서 피크닉 이미지</a>
                        <p class="tab3_prd4_txt1">#2. 베르사유 정원에서 피크닉</p>
                        <div class="tab3_prd4_txt2_wrap">
                            <p class="tab3_prd4_txt2">PRICE</p>
                            <p class="tab3_prd4_txt3">KRW 24,000</p>
                            <p class="tab3_prd4_txt4">
                                패키지를 살펴보면 그림처럼 펼쳐진 풍경과 실제 일기가 적혀있습니다.
                                누군가와 여행을 떠나는 기분으로 상자를 열어주세요.
                                함께 가벼운 산책길을 나설 당신의 방문을 기다리겠습니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
                <div class="tab3_row3">
                    <div class="tab3_prd5">
                        <a>#1. 비 오는 날의 스위스 이미지</a>
                        <p class="all_prd5_txt1">#1. 비 오는 날의 스위스</p>
                        <div class="all_prd5_txt2_wrap">
                            <p class="all_prd5_txt2">PRICE</p>
                            <p class="all_prd5_txt3">KRW 24,000</p>
                            <p class="all_prd5_txt4">
                                천연 선향 특성상 은은한 향이 피어오릅니다. 태우자 마자 강렬하게 다가오지 않기 때문에 오티에이치콤마의 인센스는 처음 사용하시는 분들께 부담없이 다가갑니다.
                            </p>
                        </div>
                        <button class="add_to_cart_btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </section>
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
                <div class="escrow_logo"><img src="images/escrow_inicisPay2.png"></img></div>
                <div class="escrow_txt">안전구매(에스크로) 서비스 가맹점</div>
            </div>
            <div class="term_link_wrap">
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Confirm Entrepreneur Information</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
</body>
</html>