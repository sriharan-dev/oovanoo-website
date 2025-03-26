var loadCount = 1;
var loadingModel = new bootstrap.Modal(
  document.getElementById("loadingScreen")
);

function toggleLoadingModal() {
  // Toggle Modal
  loadingModel.toggle();
  console.log(loadCount++);

  // Toggle the modal again after 3 seconds
  setTimeout(() => {
    loadingModel.toggle();
  }, 3000);
}

//select2
$(document).ready(function () {
  var elementTemp = document.getElementsByClassName("select2");
  if (elementTemp.length > 0) {
    $(".select22").select2({
      placeholder: "Type to search here...",
      allowClear: true,
      /*
			tags: false,
			escapeMarkup: function(m) {
				return m;
			 }
			 */
    });
  }
});

/**
//datatable
$(document).ready( function () {
	var elementTemp = document.getElementsByClassName("data-table");
	if( elementTemp.length > 0 )
	{
		$('.data-table').DataTable({
			stateSave: true,
			"searching": true,
			dom: 'Bfrtip',
			destroy: true,
			buttons: [
				{ extend: 'excel', footer: true },
				//{ extend: 'pdf', footer: true },
				//{ extend: 'print', footer: true },
				/*
				{
					popoverTitle: 'Visibility control',
					extend: 'colvis',
					collectionLayout: 'two-column'
				}
			
			],
		});
	}
} );



$(document).ready(function () {		
  var table = $(".data-table").DataTable({
    lengthChange: false,
    scrollX: true,
    dom: "Bfrtip",
    buttons: [
      {
        extend: "excel",
        text: '<img src="../assets/img/download-excel.png">',
        footer: true,
        title: function () {
          return $("#fileName").val();
        },
        titleAttr: "Download Excel",
        exportOptions: 
		{
          columns: "thead th:not(.noExport)"
		}
      },
      {
        extend: "pdf",
        text: '<img src="../assets/img/download-pdf.png">', 
        footer: true,
        title: function () {
          return $("#fileName").val();
        },
        titleAttr: "Download PDF",
        exportOptions: {
          columns: "thead th:not(.noExport)"
        }
      }
    ],
  });
});

$(document).ready(function () {
  var elementTemp = document.getElementsByClassName("data-table-no-search");
  if (elementTemp.length > 0) {
    $(".data-table-no-search").DataTable({
      searching: false,
      dom: "Bfrtip",
      destroy: true,
      buttons: [
        { extend: "excel", footer: true },
        { extend: "pdf", footer: true },
        { extend: "print", footer: true },
      ],
    });
  }
});

$(document).ready(function () {
  var elementTemp = document.getElementsByClassName("data-table-no-sort");
  if (elementTemp.length > 0) {
    $(".data-table-no-sort").DataTable({
      bSort: false,
    });
  }
});

$(document).ready(function () {
  var elementTemp = document.getElementsByClassName("data-table-custom-1");
  if (elementTemp.length > 0) {
    $(".data-table-custom-1").DataTable({
      searching: false,
      dom: "Bfrtip",
      destroy: true,
      paging: false,
      bSort: false,
      buttons: [
        { extend: "excel", footer: true },
        //{ extend: 'pdf', footer: true },
        //{ extend: 'print', footer: true },
      ],
    });
  }
});

**/

//data table with all column seperate search
$(document).ready(function () {
  var elementTemp = document.getElementsByClassName(
    "data-table-all-column-search"
  );
  if (elementTemp.length > 0) {
    $(".data-table-all-column-search thead tr")
      .clone(true)
      .addClass("filters")
      .appendTo(".data-table-all-column-search thead");

    $(".data-table-all-column-search").DataTable({
      dom: "Bfrtip",
      buttons: [{ extend: "excel", footer: true }],
      orderCellsTop: true,
      fixedHeader: true,
      initComplete: function () {
        var api = this.api();

        // For each column
        api
          .columns()
          .eq(0)
          .each(function (colIdx) {
            // Set the header cell to contain the input element
            var cell = $(".filters th").eq(
              $(api.column(colIdx).header()).index()
            );
            var title = $(cell).text();
            $(cell).html('<input type="text" placeholder="' + title + '" />');

            // On every keypress in this input
            $(
              "input",
              $(".filters th").eq($(api.column(colIdx).header()).index())
            )
              .off("keyup change")
              .on("change", function (e) {
                // Get the search value
                $(this).attr("title", $(this).val());
                var regexr = "({search})"; //$(this).parents('th').find('select').val();

                var cursorPosition = this.selectionStart;
                // Search the column for that value
                api
                  .column(colIdx)
                  .search(
                    this.value != ""
                      ? regexr.replace("{search}", "(((" + this.value + ")))")
                      : "",
                    this.value != "",
                    this.value == ""
                  )
                  .draw();
              })
              .on("keyup", function (e) {
                e.stopPropagation();

                $(this).trigger("change");
                $(this)
                  .focus()[0]
                  .setSelectionRange(cursorPosition, cursorPosition);
              });
          });
      },
    });
  }
});

/*
CKEDITOR.replace( '.myCkeditor', {
	removePlugins: 'clipboard, toolbar',
	allowedContent: 'Redo',
	enterMode : CKEDITOR.ENTER_BR,
	shiftEnterMode: CKEDITOR.ENTER_P,
	height: 100
} );
*/

function gotopage(url) {
  window.location.replace(url);
}

function loadingOpen() {
  console.log(loadingModel);
  // Toggle Modal
  loadingModel.toggle();
  /*
	// Toggle the modal again after 3 seconds
	setTimeout(() => {
		loadingModel.toggle();
	}, 3000);
	*/
}

function loadingClose() {
  // Toggle the modal again after 3 seconds
  setTimeout(() => {
    loadingModel.toggle();
  }, 1000); //500 milli seconds
}

var alertType = 2;
var alertClass = "danger";
function showAlert(type, message) {
  alertType = type;
  if (alertType == 1) {
    alertClass = "success";
  } else if (alertType == 2) {
    alertClass = "danger";
  } else {
    alertClass = "warning";
  }

  $("#app-page-alert").removeClass("app-alert");
  $("#app-page-alert").removeClass("success");
  $("#app-page-alert").removeClass("danger");
  $("#app-page-alert").removeClass("warning");
  $("#app-page-alert").addClass("d-none");

  $("#app-page-alert").addClass("app-alert");
  $("#app-page-alert").addClass(alertClass);
  $("#app-page-alert").removeClass("d-none");

  $("#app-page-alert-message").text(message);
  window.setTimeout(dismissAlert, 5000);
}

function dismissAlert() {
  $("#app-page-alert").removeClass("app-alert");
  $("#app-page-alert").removeClass("success");
  $("#app-page-alert").removeClass("danger");
  $("#app-page-alert").removeClass("warning");
  $("#app-page-alert").addClass("d-none");
}

function copyText(elementId) {
  var element = document.getElementById(elementId);
  element.select();
  element.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + element.value);
}
