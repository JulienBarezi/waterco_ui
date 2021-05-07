var selectedRecord = null;
var selectedRecordID = null;
var baseUrl = "http://localhost:5307";

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: baseUrl + "/bill",
		cache: false,
		success: function (response) {
			var data = response.data;
			data.forEach((bill) => {
				addRecordToTableB(bill);
			});
		}
	});
});


function addRecordToTableB(data) {
	var bills_list = document.getElementById('bills_list').getElementsByTagName("tbody")[0];
	var newRecord = bills_list.insertRow(bills_list.length);

	let cell1 = newRecord.insertCell(0)
	cell1.innerHTML = data.bill_id;
	let cell2 = newRecord.insertCell(1)
	cell2.innerHTML = data.premise_id;
	let cell3 = newRecord.insertCell(2)
	cell3.innerHTML = data.reading_id;
	let cell4 = newRecord.insertCell(3)
	cell4.innerHTML = data.staff_id;
    let cell5 = newRecord.insertCell(4)
	cell5.innerHTML = data.period_of_billing;
    let cell6 = newRecord.insertCell(5)
	cell6.innerHTML = data.amount;
    let cell7 = newRecord.insertCell(6)
	cell7.innerHTML = data.due_date;
}



function onFormSubmitB() {
	var formData = {};
	formData["premise_id"] = document.getElementById("premise_id").value;
	formData["reading_id"] = document.getElementById("reading_id").value;
    formData["staff_id"] = document.getElementById("staff_id").value;
    formData["period_of_billing"] = document.getElementById("period_of_billing").value;
	formData["amount"] = document.getElementById("amount").value;
	formData["due_date"] = document.getElementById("due_date").value;

	
	if (selectedRecord == null) {
		saveFormDataB(formData)
	} else {
		updateFormRecordB(formData)
	}
	clearFormB();
	
}



function saveFormDataB(data) {
	var postData = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: baseUrl + "/bill",
		dataType: 'json',
		data: postData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function (response) {
			addRecordToTableB(response.data);
		}
	});
}


function clearFormB() {
	document.getElementById("premise_id").value = "";
	document.getElementById("reading_id").value = "";
    document.getElementById("staff_id").value = "";
    document.getElementById("period_of_billing").value = "";
	document.getElementById("amount").value = "";
	document.getElementById("due_date").value = "";
}

