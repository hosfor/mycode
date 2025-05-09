"use strict";
$(document).ready(function () {
  "use strict";
  $(".flashmessage").delay(3000).fadeOut(100);
});

$(document).ready(function () {
  "use strict";
  var date_to = $("#date_to").val();
  var date_from = $("#date_from").val();
  var table = $("#editable-sample3").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    searchable: true,
    ajax: {
      url:
        "finance/getPayment?start_date=" + date_from + "&end_date=" + date_to,
      type: "POST",
    },
    scroller: {
      loadingIndicator: true,
    },
    dom:
      "<'row mb-1'<'col-md-3'l><'col-sm-5 text-center'B><'col-sm-4 text-right'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    buttons: [
      {
        extend: "copyHtml5",
        exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11] },
      },
      {
        extend: "excelHtml5",
        exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11] },
      },
      {
        extend: "csvHtml5",
        exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11] },
      },
      {
        extend: "pdfHtml5",
        exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11] },
      },
      {
        extend: "print", className: 'btn-primary',
        exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11] },
      },
    ],
    aLengthMenu: [
      [10, 25, 50, 100, -1],
      [10, 25, 50, 100, "All"],
    ],
    iDisplayLength: 100,

    order: [[0, "desc"]],

    language: {
      lengthMenu: "_MENU_",
      search: "_INPUT_",
      url: "common/assets/DataTables/languages/" + language + ".json",
    },
  });
  table.buttons().container().appendTo(".custom_buttons");
});


