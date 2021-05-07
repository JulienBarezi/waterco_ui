var selectedRecord = null;
var selectedRecordID = null;
var baseUrl = "http://localhost:5307";

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: baseUrl + "/staff",
		cache: false,
		success: function (response) {
			var data = response.data;
			data.forEach((staff) => {
				addRecordToTableS(staff);
			});
		}
	});
});

function addRecordToTableS(data) {
	var staffs_list = document.getElementById('staffs_list').getElementsByTagName("tbody")[0];
	var newRecord = staffs_list.insertRow(staffs_list.length);

	let cell1 = newRecord.insertCell(0)
	cell1.innerHTML = data.full_name;
	let cell2 = newRecord.insertCell(1)
	cell2.innerHTML = data.staff_id;
	let cell3 = newRecord.insertCell(2)
	cell3.innerHTML = data.email_address;
	let cell4 = newRecord.insertCell(3)
	cell4.innerHTML = data.password;
	let cell5 = newRecord.insertCell(4);
	cell5.innerHTML = `<a onClick="onDelete(this)">Delete</a>`;
}

function onFormSubmitS() {
	var formData = {};
	formData["full_name"] = document.getElementById("full_name").value;
	formData["email_address"] = document.getElementById("email_address").value;
	formData["password"] = document.getElementById("password").value;

	if (selectedRecord == null) {
		saveFormDataS(formData)
	} else {
		updateFormRecordS(formData)
	}
	clearFormS();
}



function saveFormDataS(data) {
	var postData = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: baseUrl + "/staff",
		dataType: 'json',
		data: postData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function (response) {
			addRecordToTableS(response.data);
		}
	});
}


function onEditS(td) {
	selectedRecord = td.parentElement.parentElement;
	selectedRecordID = selectedRecord.cells[0].innerHTML;
	document.getElementById("full_name").value = selectedRecord.cells[1].innerHTML;
	document.getElementById("email_address").value = selectedRecord.cells[2].innerHTML;
	document.getElementById("password").value = selectedRecord.cells[3].innerHTML;
}

function updateFormRecordS(data) {
	var updateData = JSON.stringify(data);
	$.ajax({
		type: 'PUT',
		url: baseUrl + "/staff/" + selectedRecordID,
		dataType: 'json',
		data: updateData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function () {
			updateTableRecordS(data);
		}
	});

}

function updateTableRecordS(data) {
	selectedRecord.cells[0].innerHTML = selectedRecordID;
	selectedRecord.cells[1].innerHTML = data.full_name;
	selectedRecord.cells[2].innerHTML = data.email_address;
	selectedRecord.cells[3].innerHTML = data.password;
}

function onDeleteS(td) {
	if (confirm("Are you sure you want to delete?")) {
		let row = td.parentElement.parentElement;
		document.getElementById("staffs_list").deleteRow(row.rowIndex);
		clearFormS();
	}
}

function clearFormS() {
	document.getElementById("full_name").value = "";
	document.getElementById("email_address").value = "";
	document.getElementById("password").value = "";
}

