function amountSet() {
  let amount = 0;

  var donation = document.querySelector('input[name="donate_amount"]:checked');
  if (donation && parseInt(donation.value) > 0) {
    amount = parseInt(donation.value);
  }

  var otherAmt = document.getElementById("other_amount");
  if (otherAmt && parseInt(otherAmt.value) > 0) {
    amount = parseInt(otherAmt.value);
  }

  // FIXED: now checking ONLY selected monthly input
  var checkMonthly = document.querySelector('input[name="donate_amount_m"]:checked');
  if (checkMonthly && parseInt(checkMonthly.value) > 0) {
    amount = parseInt(checkMonthly.value);
    createSubscription(amount);
  } else {
    createOrder(amount);
  }

  console.log("The amount is " + amount);
}



// For Onetime Donation
function createOrder(amount) {
  jQuery("#pay_now_rz").attr("disabled", true);
  let order_id = "order";
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();  
  let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();  
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
  jQuery.ajax({
    type: "post",
    url: "donation/apis/create_order.php",
    data: "amount=" + amount +
          "&name=" +
          name +
          "&phone=" +
          mob_number +
          "&pan=" +
          pan +
          "&email=" +
          email +
          "&age=" + 
          age +
          "&city=" +
          city +
          "&donar_hear=" +
          hear_us +
          "&page=" + page+
		  "&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
    success: function (result) {
      console.log("Your Order Id: " + result);
      order_id = result;
      payment(amount, order_id);
    },
  });
}

function payment(amount, orderId) {
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();
  
  let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
    
  if(age == undefined && city == undefined && hear_us == undefined){
      age = "N/A";
      city = "N/A";
      hear_us = "N/A";
      
      //page = "CAMP";
  }
  /* else if(hear_us == "Facebook" || hear_us == "LinkedIn" || hear_us == "Instagram" || hear_us == "Twitter" || hear_us == "Feet on Street"){
      page = "WEB";
  }else if(hear_us == "Social Media" || hear_us == "Swadesh Representative" || hear_us == "Google Ad" || hear_us == "Email" || hear_us == "Radio"|| hear_us == "Print"|| hear_us == "Word of Mouth"){
      page = "FOS";
  } */

  var options = {
    key: "rzp_live_81kJM09YvTAHgb", // Enter the Key ID generated from the Dashboard
    amount: amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    currency: "INR",
    name: "Swades Foundation",
    description: "Donation of " + amount,
    image: "https://swadesfoundation.org/dream-village/images/logo.png",
    order_id: orderId,
    customer: {
      name: name,
      contact: mob_number,
      email: email,
    },

    handler: function (response) {
      jQuery.ajax({
        type: "post",
        url: "donation/payment_process.php",
        data:
          "payment_id=" +
          response.razorpay_payment_id +
          "&amt=" +
          amount +
          "&name=" +
          name +
          "&phone=" +
          mob_number +
          "&pan=" +
          pan +
          "&email=" +
          email +
          "&age=" + 
          age +
          "&city=" +
          city +
          "&donar_hear=" +
          hear_us +
          "&page=" + page+
		  "&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
        success: function (result) {
          jQuery("#pay_now_rz").attr("disabled", false);
          window.location.href =
            "thank_you.php?payment_id=" + response.razorpay_payment_id;
        },
      });
    },
  };

  var rzp1 = new Razorpay(options);

  if (name != "" && pan != "" && email != "" && mob_number != "") {
    rzp1.open();
  } else {
    alert("Please Fill All The Mandatory Details Before Submit!");
  }
}

// For Monthly Donation
function createSubscription(amount) {
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();
  
 let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();
  
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
  
  let sub_id = "";
  let plan_id = "";

  if (amount == 500) {
    plan_id = "plan_KE7yqqbNRnWdA8";
  } else if (amount == 650) {
    plan_id = "plan_KE7zKVyn8Wtk6J";
  } else if (amount == 750) {
    plan_id = "plan_KE7zr8XdOyhsfz";
  } else if (amount == 1000) {
    plan_id = "plan_KE80KEvpJH3GUU";
  } else if (amount == 1500) {
    plan_id = "plan_KE80i7BYKVTfez";
  } else if (amount == 2000) {
    plan_id = "plan_KE811kN9tvaIIU";
  }

 if (
    name != "" &&
    pan != "" &&
    email != "" &&
    mob_number != ""
    ) {
      $.ajax({
        type: "post",
        url: "donation/apis/create_subscription.php",
        data: "plan_id=" + plan_id +
		  "&amount=" +
          amount +
          "&name=" +
          name +
          "&phone=" +
          mob_number +
          "&pan=" +
          pan +
          "&email=" +
          email +
          "&age=" + 
          age +
          "&city=" +
          city +
          "&donar_hear=" +
          hear_us +
          "&page=" + page+
		  "&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
        success: function (response) {
          console.log("Your Subscription Id: " + response);
          sub_id = response;
          buySubscription(sub_id, amount);
        },
      });
  } else {
    alert("Please Fill All The Details Before Submit!");
  }
}

function buySubscription(sub_id, amount) {
  let name = jQuery("#donar_name").val();
  let pan = jQuery("#donar_pan").val();
  let email = jQuery("#donar_email").val();
  let mob_number = jQuery("#donar_no").val();
  
  let age = jQuery("#donar_age").val();
  let city = jQuery("#donar_city").val();
  let hear_us = jQuery("#donar_hear_us").val();
  let referrer_url = jQuery("#referrer_url").val();
  let ip_address = jQuery("#ip_address").val();
  
  let page = "FOS";
    
  if(age == undefined && city == undefined && hear_us == undefined){
      age = "N/A";
      city = "N/A";
      hear_us = "N/A";
      
      //page = "CAMP";
  }
  
 /*  else if(hear_us == "Facebook" || hear_us == "LinkedIn" || hear_us == "Instagram" || hear_us == "Twitter" || hear_us == "Feet on Street"){
      page = "WEB";
  }else if(hear_us == "Social Media" || hear_us == "Swadesh Representative" || hear_us == "Google Ad" || hear_us == "Email" || hear_us == "Radio"|| hear_us == "Print"|| hear_us == "Word of Mouth"){
      page = "FOS";
  } */

  var options = {
    key: "rzp_live_81kJM09YvTAHgb",
    subscription_id: sub_id,
    name: "Swades Foundation",
    description: "Monthly Donation To Swades Foundation",
    image: "https://swadesfoundation.org/dream-village/images/logo.png",
    handler: function (response) {
      console.log(response);
      jQuery.ajax({
        type: "post",
        url: "donation/payment_process.php",
        data:
            "payment_id=" +
            response.razorpay_payment_id +
            "&amt=" +
            amount +
            "&name=" +
            name1 +
            "&phone=" +
            mob_number1 +
            "&pan=" +
            pan1 +
            "&email=" +
            email1 +
            "&age=" +
            age1 +
            "&city=" +
            city1 +
            "&donar_hear=" +
            hear_us1 +
            "&page=" + page +
            "&sub_id=" + sub_id+
			"&referrer_url=" + referrer_url+
		  "&ip_address=" + ip_address,
        success: function (result) {
          window.location.href =
            "thank_you.php?payment_id=" + response.razorpay_payment_id;
        },
      });
    },
  };

  var rzp1 = new Razorpay(options);
  rzp1.open();
}