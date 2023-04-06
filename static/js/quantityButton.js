function increment(isbn) {
    var input = document.getElementById("book-" + isbn).querySelector(".book-quantity");
    var value = input.value;
    if (value < 99) {
        value++;
    }
    input.value = value;
}

function decrement(isbn) {
    var input = document.getElementById("book-" + isbn).querySelector(".book-quantity");
    var value = input.value;
    if (value > 1) {
        value--;
    }
    input.value = value;
}