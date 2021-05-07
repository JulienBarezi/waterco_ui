var selectedRecord = null;
var selectedRecordID = null;
var baseUrl = "http://localhost:5307";

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: baseUrl + "/premise",
		cache: false,
		success: function (response) {
			var data = response.data;
			data.forEach((premise) => {
				addRecordToTableP(premise);
			});
		}
	});
});


function addRecordToTableP(data) {
	var premises_list = document.getElementById('premises_list').getElementsByTagName("tbody")[0];
	var newRecord = premises_list.insertRow(premises_list.length);

	let cell1 = newRecord.insertCell(0)
	cell1.innerHTML = data.premise_id;
	let cell2 = newRecord.insertCell(1)
	cell2.innerHTML = data.member_id;
	let cell3 = newRecord.insertCell(2)
	cell3.innerHTML = data.route_id;
	let cell4 = newRecord.insertCell(3)
	cell4.innerHTML = data.address;
    let cell5 = newRecord.insertCell(4)
	cell5.innerHTML = data.structure;
    let cell6 = newRecord.insertCell(5)
	cell6.innerHTML = data.premise_status;
    let cell7 = newRecord.insertCell(6)
	cell7.innerHTML = data.meter_number;
	let cell8 = newRecord.insertCell(7);
	cell8.innerHTML = `<a onClick="onEditP(this)">Edit</a>
                        <a onClick="onDelete(this)">Delete</a>`;
}



function onFormSubmitP() {
	var formData = {};
	formData["member_id"] = document.getElementById("member_id").value;
	formData["route_id"] = document.getElementById("route_id").value;
    formData["address"] = document.getElementById("address").value;
    formData["structure"] = document.getElementById("structure").value;
	formData["premise_status"] = document.getElementById("premise_status").value;
	formData["meter_number"] = document.getElementById("meter_number").value;

	if (selectedRecord == null) {
		saveFormDataP(formData)
	} else {
		updateFormRecordP(formData)
	}
	clearFormP();
}



function saveFormDataP(data) {
	var postData = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: baseUrl + "/premise",
		dataType: 'json',
		data: postData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function (response) {
			addRecordToTableP(response.data);
		}
	});
}


function onEditP(td) {
	selectedRecord = td.parentElement.parentElement;
	selectedRecordID = selectedRecord.cells[0].innerHTML;
	document.getElementById("member_id").value = selectedRecord.cells[1].innerHTML;
	document.getElementById("route_id").value = selectedRecord.cells[2].innerHTML;
    document.getElementById("address").value = selectedRecord.cells[3].innerHTML;
    document.getElementById("structure").value = selectedRecord.cells[4].innerHTML;
	document.getElementById("premise_status").value = selectedRecord.cells[5].innerHTML;
	document.getElementById("meter_number").value = selectedRecord.cells[6].innerHTML;
}

function updateFormRecordP(data) {
	var updateData = JSON.stringify(data);
	$.ajax({
		type: 'PUT',
		url: baseUrl + "/premise/" + selectedRecordID,
		dataType: 'json',
		data: updateData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function () {
			updateTableRecordP(data);
		}
	});

}

function updateTableRecordP(data) {
	selectedRecord.cells[0].innerHTML = selectedRecordID;
	selectedRecord.cells[1].innerHTML = data.member_id;
	selectedRecord.cells[2].innerHTML = data.route_id;
	selectedRecord.cells[3].innerHTML = data.address;
    selectedRecord.cells[4].innerHTML = data.structure;
	selectedRecord.cells[5].innerHTML = data.premise_status;
	selectedRecord.cells[6].innerHTML = data.meter_number;
}

function onDeleteP(td) {
	if (confirm("Are you sure you want to delete?")) {
		let row = td.parentElement.parentElement;
		document.getElementById("premises_list").deleteRow(row.rowIndex);
		clearFormP();
	}
}

function clearFormP() {
	document.getElementById("member_id").value = "";
	document.getElementById("route_id").value = "";
    document.getElementById("address").value = "";
    document.getElementById("structure").value = "";
	document.getElementById("premise_status").value = "";
	document.getElementById("meter_number").value = "";
}

