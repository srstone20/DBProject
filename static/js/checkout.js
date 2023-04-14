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

function purchase() {

    let db = new sqlite3.Database('../../sql/bbb.db')
    // INSERT PURCHASE INFO INTO THE PURCHASE TABLE

    open("/proof_purchase", "_self");
}