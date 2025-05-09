"use strict";




$(document).ready(function () {
  "use strict";
  $(".doctor_div").on("change", "#adoctors", function () {
    "use strict";

    var id = $("#appointment_id").val();
    var date = $("#date").val();
    var doctorr = $("#adoctors").val();
    $("#visit_description").html(" ");
    $("#aslots").find("option").remove();

    $.ajax({
      url:
        "site/getAvailableSlotByDoctorByDateByJason?date=" +
        date +
        "&doctor=" +
        doctorr,
      method: "GET",
      data: "",
      dataType: "json",
    }).done(function (response) {
      "use strict";
      var slots = response.aslots;
      $.each(slots, function (key, value) {
        $("#aslots").append($("<option>").text(value).val(value)).end();
      });

      if ($("#aslots").has("option").length === 0) {
        $("#aslots")
          .append(
            $("<option>").text(no_available_timeslots).val("Not Selected")
          )
          .end();
      }
      $("#visit_charges").val(" ");
      $.ajax({
        url: "site/getDoctorVisit?id=" + doctorr,
        method: "GET",
        data: "",
        dataType: "json",
      }).done(function (response) {
        $("#visit_description").html(response.response).end();
      });
    });
  });
});
$(document).ready(function () {
  $("#visit_description").change(function () {
    // Get the record's ID via attribute
    var id = $(this).val();

    $("#visit_charges").val(" ");
    $("#grand_total").val(" ");
    // $('#default').trigger("reset");

    $.ajax({
      url: "site/getDoctorVisitCharges?id=" + id,
      method: "GET",
      data: "",
      dataType: "json",
    }).done(function (response) {
      $("#visit_charges").val(response.response.visit_charges).end();
      var discount = $("#discount").val();
      $("#grand_total")
        .val(parseFloat(response.response.visit_charges - discount))
        .end();
    });
  });
  $(".card1").hide();
  $("#pay_now_appointment").change(function () {
    if (this.checked) {
      $(".card1").show();

      if (
        payment_gateway != "Pay U Money" &&
        payment_gateway != "Paystack" &&
        payment_gateway != "SSLCOMMERZ" &&
        payment_gateway != "Paytm"
      ) {
        $("#expire").prop("required", true);
        $("#cvv").prop("required", true);
      }
    } else {
      $(".card1").hide();
      if (
        payment_gateway != "Pay U Money" &&
        payment_gateway != "Paystack" &&
        payment_gateway != "SSLCOMMERZ" &&
        payment_gateway != "Paytm"
      ) {
        $("#expire").removeAttr("required");
        $("#cvv").removeAttr("required");
      }
    }
  });
});

$(document).ready(function () {
  "use strict";
  var id = $("#appointment_id").val();
  var date = $("#date").val();
  var doctorr = $("#adoctors").val();
  $("#aslots").find("option").remove();

  $.ajax({
    url:
      "site/getAvailableSlotByDoctorByDateByJason?date=" +
      date +
      "&doctor=" +
      doctorr,
    method: "GET",
    data: "",
    dataType: "json",
  }).done(function (response) {
    "use strict";
    var slots = response.aslots;
    $.each(response.aslots, function (key, value) {
      "use strict";
      $("#aslots").append($("<option>").text(value).val(value)).end();
    });
    $("#aslots")
      .val(response.current_value)
      .find("option[value=" + response.current_value + "]")
      .attr("selected", true);

    if ($("#aslots").has("option").length === 0) {
      //if it is blank.
      $("#aslots")
        .append(
          $("<option>").text(no_available_timeslots).val("Not Selected")
        )
        .end();
    }
  });
});
document.addEventListener('DOMContentLoaded', function () {
  flatpickr("#date", {

    dateFormat: "d-m-Y", // Set date format
    defaultDate: "today",
    onChange: dateChanged,
  });
});
// $(document).ready(function () {
//   "use strict";
//   $("#date")
//     .datepicker({
//       format: "dd-mm-yyyy",
//       autoclose: true,
//       language: langdate
//     })

//    // .change(dateChanged)
//     .on("changeDate", dateChanged);
// });
function dateChanged() {
  "use strict";
  var id = $("#appointment_id").val();
  var date = $("#date").val();
  var doctorr = $("#adoctors").val();
  $("#aslots").find("option").remove();

  $.ajax({
    url:
      "site/getAvailableSlotByDoctorByDateByJason?date=" + 
      date +
      "&doctor=" +
      doctorr,
    method: "GET",
    data: "",
    dataType: "json",
  }).done(function (response) {
    "use strict";
    var slots = response.aslots;
    $.each(response.aslots, function (key, value) {
      "use strict";
      $("#aslots").append($("<option>").text(value).val(value)).end();
    });

    if ($("#aslots").has("option").length === 0) {
      $("#aslots")
        .append(
          $("<option>").text(no_available_timeslots).val("Not Selected")
        )
        .end();
    }
  });
}

$(document).ready(function () {
  "use strict";
  $(".caption img").removeAttr("style");
  var windowH = $(window).width();
  $(".caption img").css("width", windowH + "px");
  $(".caption img").css("height", "500px");
});

$(function () {
  "use strict";
  $(".navoption").on("click", "a[href*=\\#]:not([href=\\#])", function () {
    "use strict";

    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html,body").animate(
          {
            scrollTop: target.offset().top,
          },
          1000
        );
        return false;
      }
    }
  });
});
$(document).ready(function () {
  "use strict";
  $(".headerSlider").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    dots: true,
    nav: false,
    navText: [
      "<div class='hd-nav-btn nav-btn-left'><i class='fa fa-chevron-left fa-2x'></i></div>",
      "<div class='hd-nav-btn nav-btn-right'><i class='fa fa-chevron-right fa-2x'></i></div>",
    ],
    navigation: true,
    pagination: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        loop: true,
      },
      600: {
        items: 1,
        loop: true,
      },
      1000: {
        items: 1,
        loop: true,
      },
    },
  });
});
function cardValidation() {
  var valid = true;
  var cardNumber = $("#card").val();
  var expire = $("#expire").val();
  var cvc = $("#cvv").val();

  $("#error-message").html("").hide();

  if (cardNumber.trim() == "") {
    valid = false;
  }

  if (expire.trim() == "") {
    valid = false;
  }
  if (cvc.trim() == "") {
    valid = false;
  }

  if (valid == false) {
    $("#error-message").html("All Fields are required").show();
  }

  return valid;
}
//set your publishable key
Stripe.setPublishableKey(publish);

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
  if (response.error) {
    //enable the submit button
    $("#submit-btn").show();
    $("#loader").css("display", "none");
    //display the errors on the form
    $("#error-message").html(response.error.message).show();
  } else {
    //get token id
    var token = response["id"];
    //insert the token into the form
    $("#token").val(token);
    $("#addAppointmentForm").append(
      "<input type='hidden' name='token' value='" + token + "' />"
    );
    //submit form to the server
    $("#addAppointmentForm").submit();
  }
}

function stripePay(e) {
  e.preventDefault();
  var valid = cardValidation();

  if (valid == true) {
    $("#submit-btn").attr("disabled", true);
    $("#loader").css("display", "inline-block");
    var expire = $("#expire").val();
    var arr = expire.split("/");
    Stripe.createToken(
      {
        number: $("#card").val(),
        cvc: $("#cvv").val(),
        exp_month: arr[0],
        exp_year: arr[1],
      },
      stripeResponseHandler
    );

    //submit from callback
    return false;
  }
}
if (payment_gateway == "2Checkout") {
  var successCallback = function (data) {
    "use strict";
    var myForm = document.getElementById("addAppointmentForm");

    $("#addAppointmentForm").append(
      "<input type='hidden' name='token' value='" +
        data.response.token.token +
        "' />"
    );

    myForm.submit();
  };
  // Called when token creation fails.
  var errorCallback = function (data) {
    "use strict";
    if (data.errorCode === 200) {
      tokenRequest();
    } else {
      alert(data.errorMsg);
    }
  };
  var tokenRequest = function () {
    "use strict";
    var expire = $("#expire").val();
    var expiresep = expire.split("/");
    var dateformat = moment(expiresep[1], "YY");
    var year = dateformat.format("YYYY");
    var args = {
      sellerId: merchant,
      publishableKey: publishable,
      ccNo: $("#card").val(),
      cvv: $("#cvv").val(),
      expMonth: expiresep[0],
      expYear: year,
    };
    console.log(
      $("#card").val() + "-" + $("#cvv").val() + expiresep[0] + year + merchant
    );

    TCO.requestToken(successCallback, errorCallback, args);
  };

  function twoCheckoutPay(e) {
    "use strict";
    e.preventDefault();

    TCO.loadPubKey("sandbox", function () {
      // for sandbox environment
      publishableKey = publishable; //your public key
      tokenRequest();
    });

    return false;
  }
}
