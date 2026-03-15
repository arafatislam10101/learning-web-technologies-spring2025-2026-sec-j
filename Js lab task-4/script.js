const unitPrice = 1000;
const quantityInput = document.getElementById("quantity");
const totalInput = document.getElementById("total");
quantityInput.addEventListener("input", function(){
let quantity = parseInt(quantityInput.value);
if(quantity < 0 || isNaN(quantity)){
quantity = 0;
quantityInput.value = 0;
}
let total = unitPrice * quantity;
totalInput.value = total;
if(total > 1000){
alert("Congratulations! You are eligible for a Gift Coupon.");

}

});