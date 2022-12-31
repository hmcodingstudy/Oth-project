const apply_all = document.getElementById("apply_all");
const apply_box = document.getElementsByName("apply_box");
const checked = document.getElementsByName("apply_box:checked");

function all_apply() {
    if (apply_all.checked == true) {
      for (let i = 0; i < 2; i++) apply_box[i].checked = true;
    } else if (apply_all.checked == false) {
      for (let i = 0; i < 2; i++) apply_box[i].checked = false;
    }
  }

function apply_check() {
  if (apply_box.length === checked.length) {
    apply_all.checked = true;
  } else {
    apply_all.checked = false;
  }
}
  