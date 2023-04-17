function submitReview() {
    var form = document.getElementById("review-form");
    var unameIn = document.getElementById("uname-input");
    var uname = sessionStorage.getItem("username");
    unameIn.value = uname;
    if (uname == null || uname == "") {
        alertify.confirm("Sign In!", "You must be signed in to submit a review.", null, null)
            .set('labels', {ok:'To Login', cancel:'Back'})
            .set("onok", () => { open("/user_login", "_self"); })
            .set("oncancel", () => { return; });
        return;
    }
    form.submit();
}