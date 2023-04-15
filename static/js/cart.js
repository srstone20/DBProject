function addToCart(isbn) {
    var row = document.getElementById("book-" + isbn);

    var title = row.querySelector(".title").innerHTML;
    var author = row.querySelector(".author").innerHTML;
    var price = row.querySelector(".price").innerHTML.substring(1);
    var img = row.querySelector(".cover-image").src;
    var quantity = row.querySelector(".book-quantity").value;
    var book = [title, author, price, img, quantity];
    console.log(book);

    var isbns = JSON.parse(localStorage.getItem("isbns"));

    // no books in cart
    if (isbns == null) {
        isbns = [isbn];
    }
    // book not in cart
    else if (localStorage.getItem(isbn) == null) {
        isbns.push(isbn);
    }
    // book in cart, just set to new values
    // all cases
    localStorage.setItem("isbns", JSON.stringify(isbns));
    localStorage.setItem(isbn, JSON.stringify(book));

    console.log(JSON.parse(localStorage.getItem("isbns")));
}

function removeFromCart(isbn) {
    localStorage.removeItem(isbn);
    var isbns = JSON.parse(localStorage.getItem("isbns"));
    var index = isbns.indexOf(isbn);
    isbns.splice(index, 1);
    localStorage.setItem("isbns", JSON.stringify(isbns));

    console.log(isbns);

    var book = document.querySelector("#book-" + isbn);
    if (book != null) {
        book.remove();
    }
}

function moveCartToPurchase() {
    console.log("here");

    // retrive all isbns and their information from cart
    var isbns = JSON.parse(localStorage.getItem("isbns"));
    var purchased = [];
    var info = [];
    isbns.forEach((element) => {
        purchased.push("p-" + element);
        info.push(localStorage.getItem(element));
    })

    // clear cart
    localStorage.clear();

    // put purchased books into their own place
    for (var i = 0; i < purchased.length; i++) {
        localStorage.setItem(purchased[i], info[i]);
    }
    localStorage.setItem("purchased", JSON.stringify(purchased));
}

function loadPurchase() {
    var cartContainer = document.querySelector(".body");

    var isbnsStr = localStorage.getItem("purchased");
    if (isbnsStr == null || isbnsStr == "[]") {
        cartContainer.innerHTML = "Nothing in your cart. Let's fix that!"
        return;
    }
    var isbns = JSON.parse(isbnsStr);

    var subtotal = 0;
    isbns.forEach(isbn => {
        var book = JSON.parse(localStorage.getItem(isbn));
        console.log(book);
        cartContainer.innerHTML +=
            bookRow[0] + isbn + 
            bookRow[1] + isbn +
            bookRow[2] + book[3] + // image
            bookRow[3] + book[0] + // title
            bookRow[4] + book[1] + // author
            bookRow[5] + book[2] + // price
            bookRow[6] + isbn + // isbn
            bookRow[7] + book[4] + // quantity
            bookRow[8] + (parseFloat(book[2]) * parseFloat(book[4])); // sum quantity
        
        subtotal += parseFloat(book[2]) * parseFloat(book[4]);
    });

    document.getElementById("subtotal").innerHTML = subtotal;
    var total = subtotal + 4.99;
    document.getElementById("total").innerHTML = total;
}

function loadCart() {
    var cartContainer = document.querySelector(".body");

    var isbnsStr = localStorage.getItem("isbns");
    if (isbnsStr == null || isbnsStr == "[]") {
        cartContainer.innerHTML = "Nothing in your cart. Let's fix that!"
        return;
    }
    var isbns = JSON.parse(isbnsStr);

    var subtotal = 0;
    isbns.forEach(isbn => {
        var book = JSON.parse(localStorage.getItem(isbn));
        console.log(book);
        cartContainer.innerHTML +=
            bookRow[0] + isbn + 
            bookRow[1] + isbn +
            bookRow[2] + book[3] + // image
            bookRow[3] + book[0] + // title
            bookRow[4] + book[1] + // author
            bookRow[5] + book[2] + // price
            bookRow[6] + isbn + // isbn
            bookRow[7] + book[4] + // quantity
            bookRow[8] + (parseFloat(book[2]) * parseFloat(book[4])); // sum quantity
        
        subtotal += parseFloat(book[2]) * parseFloat(book[4]);
    });

    document.getElementById("subtotal").innerHTML = subtotal;
    var total = subtotal + 4.99;
    document.getElementById("total").innerHTML = total;

    sessionStorage.setItem("subtotal", subtotal);
    sessionStorage.setItem("total", total);
}

var bookRow = [`
<div id="book-`, `" class="row">
    <div class="col-md-2">
        <button class="btn btn-md btn-danger" onclick="removeFromCart(`, `)">Delete</button>
    </div>
    <img src="`, `" class="thumbnail">
    <div class="col-md-5">
        <p>
            <span class="title">`, `</span><br/>
            By:<span class="author">`, `</span><br/>
            <span class="price">`, `</span><br/>
            <span class="isbn">`, `</span>
        </p>
    </div>
    <div class="col-md-1 text-center qty">`, `</div>
    <div class="col-md-2 text-end sum-price">`, `</div>
</div>
`];