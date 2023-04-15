// used to display user info on screen
function getUserInfo() {
    var u = sessionStorage.getItem("username");
    if (u == null || u == "") {
        return;
    }
    var tags = document.getElementsByClassName("disp-username");
    for (var i = 0; i < tags.length; i++) {
        tags[i].innerHTML = sessionStorage.getItem("username");
        tags[i].value = sessionStorage.getItem("username");
    }
}
