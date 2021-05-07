var selectedRecord = null;
var selectedRecordID = null;
var baseUrl = "http://localhost:5307";

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: baseUrl + "/routes",
		cache: false,
		success: function (response) {
			var data = response.data;
			data.forEach((route) => {
				addRecordToTableR(route);
			});
		}
	});
});

function addRecordToTableR(data) {
	var routes_list = document.getElementById('routes_list').getElementsByTagName("tbody")[0];
	var newRecord = routes_list.insertRow(routes_list.length);

	let cell1 = newRecord.insertCell(0)
	cell1.innerHTML = data.route_id;
	let cell2 = newRecord.insertCell(1)
	cell2.innerHTML = data.route_name;
	let cell3 = newRecord.insertCell(2)
	cell3.innerHTML = data.plant_id;
	let cell4 = newRecord.insertCell(3);
	cell4.innerHTML = `<a onClick="onEditR(this)">Edit</a>
                        <a onClick="onDelete(this)">Delete</a>`;
}

function onFormSubmitR() {
	var formData = {};
	formData["route_name"] = document.getElementById("route_name").value;
	formData["plant_id"] = document.getElementById("plant_id").value;

	if (selectedRecord == null) {
		saveFormDataR(formData)
	} else {
		updateFormRecordR(formData)
	}
	clearFormR();
}



function saveFormDataR(data) {
	var postData = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: baseUrl + "/routes",
		dataType: 'json',
		data: postData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function (response) {
			addRecordToTableR(response.data);
		}
	});
}


function onEditR(td) {
	selectedRecord = td.parentElement.parentElement;
	selectedRecordID = selectedRecord.cells[0].innerHTML;
	document.getElementById("route_name").value = selectedRecord.cells[1].innerHTML;
	document.getElementById("plant_id").value = selectedRecord.cells[2].innerHTML;
}

function updateFormRecordR(data) {
	var updateData = JSON.stringify(data);
	$.ajax({
		type: 'PUT',
		url: baseUrl + "/routes/" + selectedRecordID,
		dataType: 'json',
		data: updateData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function () {
			updateTableRecordR(data);
		}
	});

}

function updateTableRecordR(data) {
	selectedRecord.cells[0].innerHTML = selectedRecordID;
	selectedRecord.cells[1].innerHTML = data.route_name;
	selectedRecord.cells[2].innerHTML = data.plant_id;

}

function onDeleteR(td) {
	if (confirm("Are you sure you want to delete?")) {
		let row = td.parentElement.parentElement;
		document.getElementById("routes_list").deleteRow(row.rowIndex);
		clearFormR();
	}
}

function clearFormR() {
	document.getElementById("route_name").value = "";
	document.getElementById("plant_id").value = "";
}