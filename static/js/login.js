function login() {
    var username = document.getElementById("in-username").value;
    var password = document.getElementById("in-password").value;

    if (username == "" || password == "") {
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
                alertify.alert("Enter Information", "Please fill all fields to sign in.")
                    .set('labels', {ok:'Try Again'});
            }
        }
    }
    xhr.send(`{"username":"${username}","password":"${password}"}`);
}