<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
var options = {
    "key": "rzp_test_bpkYObmj5H0Qba", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Ad_Sol(Solution for Ads)",
    "description": "Test Transaction",
    "image": "https://example.com/",
    "handler":function(response){
        console.log(response);

    }
};

var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>