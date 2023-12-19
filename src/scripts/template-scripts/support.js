const currentAccount = document.getElementById("current_account");
const copyCurrentAccount = document.getElementById("copy_current_account");

if(copyCurrentAccount && currentAccount) {
  copyCurrentAccount.addEventListener("click", onCopyBtnClick);

  function onCopyBtnClick(e) {
  const copyAccount = currentAccount.innerHTML;
  console.log(copyAccount);

  window.navigator.clipboard.writeText(copyAccount)

  alert("Скопійвано у буфер обміну: " + copyAccount);
  }
}