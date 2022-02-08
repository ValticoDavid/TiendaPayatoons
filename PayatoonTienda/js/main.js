let carts = document.querySelectorAll(".btn-cart");
// this is the list of products that will be display in the cart.html
let products = [{
    name: "Playera del Payaso DJ",
    tag: "playeraDJ",
    price: 200,
    inCart: 0,
}, ];

function onLoadCartNumber() {
    let productNumbers = localStorage.getItem("cartNumber");
    // This function is to if the page loads the number in the cart box will not be deleted
    if (productNumbers) {
        document.querySelector(".cart span").textContent = productNumbers;
    }
}

function cartNumbers() {
    let producNumbers = localStorage.getItem("cartNumbers");
    // this is to convert the string to an item
    productNumbers = parseInt(producNumbers);

    if (producNumbers) {
        // this is if there is an item on the cart it will be added
        localStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector(".cart span").textContent = productNumbers + 1;
    } else {
        // if its the first item it will be 1
        localStorage.setItem("cartNumbers", 1);
        document.querySelector(".cart span").textContent = 1;
    }
}

onLoadCartNumber();