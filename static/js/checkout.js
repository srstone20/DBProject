function startCheckout() {
    if (sessionStorage.getItem("user") == null) {
        alertify.confirm("Login to Checkout", "Please log in before you check out.", null, null)
            .set('labels', {ok:'To Login', cancel:'Back'})
            .set("onok", () => { open("/user_login", "_self"); })
            .set("oncancel", () => { return; });
    }
    else {
        open("/confirm_order", "_self");
    }
}