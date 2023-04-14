function login() {
    var username = document.getElementById("in-username").value;
    var password = document.getElementById("in-password").value;

    if (username == "" || password == "") {
        alertify.alert("Incomplete Information", "You did not complete filling in the fields.")
            .set('labels', {ok:'Try Again'});
        return;
    }

    console.log(username);
    console.log(password);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/user_login");
    
    xhr.onreadystatechange = () => {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            if (xhr.responseText == "success") {
                console.log("success");
                sessionStorage.setItem("username", username);
                open("/search", "_self");
            }
            else {
                console.log("fail");
                alertify.alert("Incorrect Input Information", "The information entered was not matched as a valid login.")
                    .set('labels', {ok:'Try Again'});
            }
        }
    }
    xhr.send(`{"username":"${username}","password":"${password}"}`);
}