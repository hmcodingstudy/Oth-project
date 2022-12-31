function form_check() {
  let u_name = document.querySelector(".u_name");
  let u_id = document.querySelector(".u_id");
  let pwd = document.querySelector(".pwd");
  let repwd = document.querySelector(".repwd");
  let mobile_box1 = document.querySelector(".mobile_box1");
  let mobile_box2 = document.querySelector(".mobile_box2");
  let mobile_box3 = document.querySelector(".mobile_box3");
  let pscode = document.querySelector(".pscode");
  let addr_1 = document.querySelector(".addr_1");
  let addr_2 = document.querySelector(".addr_2");
  let email_dns = document.getElementById("email_dns");
  let email_sel = document.getElementById("email_sel");
  let birth = document.querySelector(".birth");
  let male = document.getElementById("male");
  let female = document.getElementById("female");
  let ag2 = document.getElementById("ag2");
  let ag3 = document.getElementById("ag3");

  if (u_name.value == "") {
    let txt = document.getElementById("err_name");
    txt.textContent = "이름을 입력하세요.";
    u_name.focus();
    return false;
  }
  if (u_id.value == "") {
    let txt = document.getElementById("err_id");
    txt.textContent = "아이디를 입력하세요.";
    u_id.focus();
    return false;
  }

  let id_len = u_id.value.length;

  if (id_len < 5 || id_len > 15) {
    let txt = document.getElementById("err_id");
    txt.textContent = "*아이디는 5~15글자 이내로 입력하세요";
    u_id.focus();
    return false;
  } 
  if (pwd.value == "") {
    let txt = document.getElementById("err_password");
    txt.textContent = "비밀번호를 입력하세요.";
    pwd.focus();
    return false;
  }

  let pwd_reg = /^[A-Za-z0-9]{8,16}$/;
  if (!pwd_reg.test(pwd.value)) {
    let txt = document.getElementById("err_password");
    txt.textContent = "비밀번호는 영문,숫자 8~16자리로 입력해 주세요.";
    pwd.focus();
    return false;
  }
  if (repwd.value == "") {
    let txt = document.getElementById("err_repassword");
    txt.textContent = "비밀번호를 입력하세요.";
    repwd.focus();
    return false;
  }
  if (pwd.value !== repwd.value) {
    let txt = document.getElementById("err_repassword");
    txt.textContent = "비밀번호가 일치하지 않습니다.";
    repwd.focus();
    return false;
  }
  if (mobile_box1.value == "") {
    let txt = document.getElementById("err_mobile");
    txt.textContent = "휴대폰 번호를 입력하세요.";
    mobile_box1.focus();
    return false;
  }

  let mobile_reg = /^\d{3,4}$/;
  if (!mobile_reg.test(mobile_box1.value)) {
    let txt = document.getElementById("err_mobile");
    txt.textContent = "숫자 3-4자리를 입력해 주세요.";
    mobile_box1.focus();
    return false;
  }
  if (mobile_box2.value == "") {
    let txt = document.getElementById("err_mobile");
    txt.textContent = "휴대폰 번호를 입력하세요.";
    mobile_box2.focus();
    return false;
  }
  if (!mobile_reg.test(mobile_box2.value)) {
    let txt = document.getElementById("err_mobile");
    txt.textContent = "숫자 3-4자리를 입력해 주세요.";
    mobile_box2.focus();
    return false;
  }
  if (mobile_box3.value == "") {
    let txt = document.getElementById("err_mobile");
    txt.textContent = "휴대폰 번호를 입력하세요.";
    mobile_box3.focus();
    return false;
  }
  if (!mobile_reg.test(mobile_box3.value)) {
    let txt = document.getElementById("err_mobile");
    txt.textContent = "숫자 3-4자리를 입력해 주세요.";
    mobile_box3.focus();
    return false;
  }
  if (pscode.value == "") {
    let txt = document.getElementById("err_addr");
    txt.textContent = "우편번호를 검색하세요.";
    return false;
  }
  if (addr_1.value == "") {
    let txt = document.getElementById("err_addr");
    txt.textContent = "주소를 검색하세요.";
    addr_1.focus();
    return false;
  }
  if (addr_2.value == "") {
    let txt = document.getElementById("err_addr");
    txt.textContent = "상세 주소를 입력하세요.";
    addr_2.focus();
    return false;
  }
  if (email_id.value == "") {
    let txt = document.getElementById("err_email");
    txt.textContent = "이메일을 입력하세요.";
    email_id.focus();
    return false;
  }
  if (email_dns.value == "") {
    let txt = document.getElementById("err_email");
    txt.textContent = "이메일 주소를 선택하세요.";
    email_dns.focus();
    return false;
  }
  if (birth.value == "") {
    let txt = document.getElementById("err_birth");
    txt.textContent = "생년월일을 입력하세요.";
    birth.focus();
    return false;
  }

  let bir_len = birth.value.length;
  if (bir_len != 8) {
    let txt = document.getElementById("err_birth");
    txt.textContent = "생년월일은 8자리로 입력해주세요";
    birth.focus();
    return false;
  }
  if (!male.checked && !female.checked) {
      let txt = document.getElementById("err_gender");
      txt.textContent = "성별을 선택하세요.";
      return false;
  }
  if (!ag2.checked) {
    let txt = document.getElementById("err_apply1");
    txt.textContent = "필수 약관에 동의하세요.";
    ag2.focus();
    return false;
  }
  if (!ag3.checked) {
    let txt = document.getElementById("err_apply2");
    txt.textContent = "필수 약관에 동의하세요.";
    ag3.focus();
    return false;
  }
}
function id_search() {
  let id_search = document.querySelector(".id_search");
  window.open("id_search.html");
}
function change_email() {
  let idx = email_sel.options.selectedIndex;
  let val = email_sel.options[idx].value;
  email_dns.value = val;
}

/*전체동의 클릭시 모두 체크*/
function all_apply() {
  const apply_all = document.getElementById("apply_all");
  const apply_box = document.getElementsByName("apply_box");
  if (apply_all.checked == true) {
    for (let i = 0; i < 3; i++) apply_box[i].checked = true;
  } else if (apply_all.checked == false) {
    for (let i = 0; i < 3; i++) apply_box[i].checked = false;
  }
}
const apply_all = document.getElementById("apply_all");
const ag1 = document.getElementById("ag1");
const checked = document.getElementsByName("apply_box:checked");
const apply_box = document.getElementsByName("apply_box");
function apply_check() {
  if (apply_box.length === checked.length) {
    apply_all.checked = true;
  } else {
    apply_all.checked = false;
  }
}


