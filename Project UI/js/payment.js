var selectedRecordPay = null;
var selectedRecordIDPayPay = null;
var baseUrl = "http://localhost:5307";

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: baseUrl + "/payments",
		cache: false,
		success: function (response) {
			var data = response.data;
			data.forEach((payment) => {
				addRecordToTablePay(payment);
			});
		}
	});
});

function addRecordToTablePay(data) {
	var payments_list = document.getElementById('payments_list').getElementsByTagName("tbody")[0];
	var newRecord = payments_list.insertRow(  payments_list.length);

	let cell1 = newRecord.insertCell(0)
	cell1.innerHTML = data.payment_id;
	let cell2 = newRecord.insertCell(1)
	cell2.innerHTML = data.premise_id;
	let cell3 = newRecord.insertCell(2)
	cell3.innerHTML = data.bill_id;
	let cell4 = newRecord.insertCell(3)
	cell4.innerHTML = data.member_id;
    let cell5 = newRecord.insertCell(4)
	cell5.innerHTML = data.remaining_amount;
	let cell6 = newRecord.insertCell(5);
	cell6.innerHTML = `<a onClick="onEditPay(this)">Edit</a>
                        <a onClick="onDeletePay(this)">Delete</a>`;
}

function onFormSubmitPay() {
	var formData = {};
	formData["premise_id"] = document.getElementById("premise_id").value;
	formData["bill_id"] = document.getElementById("bill_id").value;
	formData["member_id"] = document.getElementById("member_id").value;
    formData["remaining_amount"] = document.getElementById("remaining_amount").value;

	if (selectedRecordPay == null) {
		saveFormDataPay(formData)
	} else {
		updateFormRecordPay(formData)
	}
	clearFormPay();
}



function saveFormDataPay(data) {
	var postData = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: baseUrl + "/payments",
		dataType: 'json',
		data: postData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function (response) {
			addRecordToTablePay(response.data);
		}
	});
}


function onEditPay(td) {
	selectedRecordPay = td.parentElement.parentElement;
	selectedRecordIDPay = selectedRecordPay.cells[0].innerHTML;
	document.getElementById("premise_id").value = selectedRecordPay.cells[1].innerHTML;
	document.getElementById("bill_id").value = selectedRecordPay.cells[2].innerHTML;
	document.getElementById("member_id").value = selectedRecordPay.cells[3].innerHTML;
    document.getElementById("remaining_amount").value = selectedRecordPay.cells[4].innerHTML;
}

function updateFormRecordPay(data) {
	var updateData = JSON.stringify(data);
	$.ajax({
		type: 'PUT',
		url: baseUrl + "/payments/" + selectedRecordIDPay,
		dataType: 'json',
		data: updateData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function () {
			updateTableRecordPay(data);
		}
	});

}

function updateTableRecordPay(data) {
	selectedRecordPay.cells[0].innerHTML = selectedRecordIDPay;
	selectedRecordPay.cells[1].innerHTML = data.premise_id;
	selectedRecordPay.cells[2].innerHTML = data.bill_id;
	selectedRecordPay.cells[3].innerHTML = data.member_id;
    selectedRecordPay.cells[4].innerHTML = data.receiving_amount;
}

function onDeletePay(td) {
	if (confirm("Are you sure you want to delete?")) {
		let row = td.parentElement.parentElement;
		document.getElementById("payments_list").deleteRow(row.rowIndex);
		clearFormPay();
	}
}

function clearFormPay() {
	document.getElementById("premise_id").value = "";
	document.getElementById("bill_id").value = "";
	document.getElementById("member_id").value = "";
    document.getElementById("remaining_amount").value = "";
}

