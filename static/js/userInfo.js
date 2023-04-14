function getUserInfo() {
    var u = sessionStorage.getItem("username");
    if (u == null || u == "") {
        return;
    }
    document.getElementById("disp-username").innerHTML = sessionStorage.getItem("username");
}