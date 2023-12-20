const currentAccount = document.getElementById("current_account");
const copyCurrentAccounbtn = document.getElementById("copy_current_account");

if(copyCurrentAccounbtn && currentAccount) {
    copyCurrentAccounbtn.addEventListener("click", function() {
    var range = document.createRange();
    range.selectNode(currentAccount);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();

    appearCheckMark();
});
}

function appearCheckMark() {
  const checkmarkEl = document.getElementById("hidden-checkmark");
    checkmarkEl.classList.add("checked");
    setTimeout(() => {
      checkmarkEl.classList.remove("checked");
    }, "2000");
}