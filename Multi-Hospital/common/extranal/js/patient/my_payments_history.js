"use strict";
$(document).ready(function () {
  "use strict";
  $(".table").on("click", ".edittbutton", function () {
    "use strict";
    $("#loader").show();
    var iid = $(this).attr("data-id");
    $("#editDepositform").trigger("reset");
    $.ajax({
      url: "finance/editDepositbyJason?id=" + iid,
      method: "GET",
      data: "",
      dataType: "json",
      success: function (response) {
        "use strict";
        if (response.deposit.deposit_type != "Card") {
          $("#editDepositform")
            .find('[name="id"]')
            .val(response.deposit.id)
            .end();
          $("#editDepositform")
            .find('[name="patient"]')
            .val(response.deposit.patient)
            .end();
          $("#editDepositform")
            .find('[name="payment_id"]')
            .val(response.deposit.payment_id)
            .end();
          $("#editDepositform")
            .find('[name="date"]')
            .val(response.deposit.date)
            .end();
          $("#editDepositform")
            .find('[name="deposited_amount"]')
            .val(response.deposit.deposited_amount)
            .end();

          $("#myModal2").modal("show");
        } else {
          alert("Payement Processed By Card can not be edited. Thanks.");
        }
      },
      complete: function () {
        $("#loader").hide();
      },
    });
  });
});

$(document).ready(function () {
  "use strict";
  $(document.body).on("change", "#selecttype", function () {
    "use strict";
    var v = $("select.selecttype option:selected").val();
    if (v == "Card") {
      $(".card").show();
      $(".cardsubmit").removeClass("hidden");
      $(".cashsubmit").addClass("hidden");
    } else {
      $(".card").hide();
      $(".cashsubmit").removeClass("hidden");
      $(".cardsubmit").addClass("hidden");
    }
  });
  $("#deposited_amount").keyup(function () {
    var deposit = $(this).val();
    var due = $("#due_amount").val();
    if (parseFloat(deposit) > parseFloat(due)) {
      $("#deposited_amount").val(due);
    }
  });
  $(".payment_class").on("change", "#payment_id1", function () {
    "use strict";
    var iid = $(this).val();
    $("#due_amount").val("");

    // $("#deposit-form").trigger("reset");
    $("#myModal").modal("show");
    if (iid == "") {
      $("#due_amount").val("");
      $("#deposited_amount").val("");
    } else {
      $.ajax({
        url: "patient/getDepositByInvoiceIdForDeposit?id=" + iid,
        method: "GET",
        data: "",
        dataType: "json",
        success: function (response) {
          "use strict";
          $("#due_amount").val(response.response);
        },
      });
    }
  });
});

function cardValidation() {
  "use strict";
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

Stripe.setPublishableKey(publish);

function stripeResponseHandler(status, response) {
  "use strict";
  if (response.error) {
    $("#submit-btn").show();
    $("#loader").css("display", "none");

    $("#error-message").html(response.error.message).show();
    $("#submit-btn").attr("disabled", false);
    $("#error-message").html(response.error.message).show();
  } else {
    var token = response["id"];

    if (token != null) {
      $("#token").val(token);
      $("#deposit-form").append(
        "<input type='hidden' name='token' value='" + token + "' />"
      );

      $("#deposit-form").submit();
    } else {
      alert("Please Check Your Card details");
      $("#submit-btn").attr("disabled", false);
    }
  }
}

function stripePay(e) {
  "use strict";
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

    return false;
  }
}

$(document).ready(function () {
  "use strict";
  $(".flashmessage").delay(3000).fadeOut(100);
});
