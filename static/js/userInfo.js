function getUserInfo() {
    var u = sessionStorage.getItem("username");
    if (u == null || u == "") {
        return;
    }
    var tags = document.getElementsByClassName("disp-username");
    for (var i = 0; i < tags.length; i++) {
        tags[i].innerHTML = u;
        tags[i].value = u;
    }
}

// function getUserInfo() {
//     console.log("GETTING IT");
// }