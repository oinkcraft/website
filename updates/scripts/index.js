function changeUpdate(updateId) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let updates = document.querySelectorAll(".update-slot")
      updates.forEach(update => {
        update.classList.remove("active")
      })
      document.getElementById("update-" + updateId).classList.add("active")
      document.querySelector(".main-update-content").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET","ajax/getUpdate.php?id="+updateId,true);
  xmlhttp.send();
}