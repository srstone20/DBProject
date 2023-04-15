function startCheckout() {
    if (sessionStorage.getItem("username") == null || sessionStorage.getItem("username") == "") {
        alertify.confirm("Login to Checkout", "Please log in before you check out.", null, null)
            .set('labels', {ok:'To Login', cancel:'Back'})
            .set("onok", () => { open("/user_login", "_self"); })
            .set("oncancel", () => { return; });
    }
    else {
        open("/confirm_order", "_self");
    }
}

function openProofPurchase() {
    open("/proof_purchase", "_self");
}

// Loads customer information for order (top of the page stuff)
function loadUserInfo() {
    var username = sessionStorage.getItem("username");
    var password = sessionStorage.getItem("password");

    console.log(username);
    console.log(password);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/confirm_order");
    xhr.onreadystatechange = () => {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response);
            document.getElementById("fname").innerHTML = response['fname'];
            document.getElementById("lname").innerHTML = response['lname'];
            document.getElementById("address").innerHTML = response['address'];
            document.getElementById("city").innerHTML = response['city'];
            document.getElementById("state").innerHTML = response['state'];
            document.getElementById("zipcode").innerHTML = response['zipcode'];
            document.getElementById("card_no").innerHTML = response['card_no'];
        }
    }
    xhr.send(`{"username":"${username}","password":"${password}"}`);
}

function purchase() {
    var username = sessionStorage.getItem("username");
    var password = sessionStorage.getItem("password");
    var subtotal = sessionStorage.getItem("subtotal");
    var total = sessionStorage.getItem("total");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/proof_purchase");
    xhr.onreadystatechange = () => {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response);
            document.getElementById("userID").innerHTML = response['userID'];
            document.getElementById("date").innerHTML = response['date'];
            document.getElementById("time").innerHTML = response['time'];
        }
    }
    xhr.send(`{"username":"${username}","password":"${password}","subtotal":"${subtotal}","total":"${total}"}`);
}